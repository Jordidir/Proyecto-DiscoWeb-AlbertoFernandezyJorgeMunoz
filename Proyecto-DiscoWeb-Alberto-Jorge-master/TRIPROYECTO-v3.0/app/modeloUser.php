<?php 
/* DATOS DE USUARIO
• Identificador ( 5 a 10 caracteres, no debe existir previamente, solo letras y números)
• Contraseña ( 8 a 15 caracteres, debe ser segura)
• Nombre ( Nombre y apellidos del usuario
• Correo electrónico ( Valor válido de dirección correo, no debe existir previamente)
• Tipo de Plan (0-Básico |1-Profesional |2- Premium| 3- Máster)
• Estado: (A-Activo | B-Bloqueado |I-Inactivo )
*/

function modeloUserInit(){
    
    /*
    $tusuarios = [ 
            "admin":["12345","Administrador","admin@system.com","3","A"],
            "Cristiano":["lalalala","Calabrozo Gutierrez","bestia_inhumana@cr7.uefa","2","A"],
            "Algoas":["locodelto","Alcacer Packo","marcafenzo.calabrozo@gmail.com","1","A"],
            "Manolo":["peroloide","Pera Perolo","perolo@gmail.com","1","I"]
        ];
    */
   
    $datosjson = @file_get_contents(FILEUSER) or die("ERROR al abrir fichero de usuarios");
    $tusuarios = json_decode($datosjson, true);
    $_SESSION['tusuarios'] = $tusuarios; //aqui guardamos los usuarios y sus datos     
}

function modeloOkUser($user,$contra){
    $tusuarios = $_SESSION['tusuarios'];
    foreach ($tusuarios as $nombre => $valor){      
        if($nombre==$user){
            foreach ($valor as $dato){
                if($dato==$contra){
                    return true;
                }
            }           
        }
        
    }
    return false;
}

function modeloObtenerTipo($user){
    return modeloUserGet($user)[3];
}

function modeloObtenerActivo($user){
    return modeloUserGet($user)[4];
}

function modeloUserGetAll (){
    $tuservista=[];
    foreach ($_SESSION['tusuarios'] as $clave => $datosusuario){
        $tuservista[$clave] = [$datosusuario[1],
                               $datosusuario[2],
                               PLANES[$datosusuario[3]],
                               ESTADOS[$datosusuario[4]]
                               ];
    }
    return $tuservista;
}

function modeloUserGet ($user){ /*Toma todos los datos de un usuario, el registrado o modificado, y los guarda en un array*/
    $usuario[0] = $_SESSION['tusuarios'][$user][0];
    $usuario[1] = $_SESSION['tusuarios'][$user][1];
    $usuario[2] = $_SESSION['tusuarios'][$user][2];
    $usuario[3] = $_SESSION['tusuarios'][$user][3];
    $usuario[4] = $_SESSION['tusuarios'][$user][4];

    return $usuario;
}

function modeloUserSave(){
    $datosjon = json_encode($_SESSION['tusuarios']);
    file_put_contents(FILEUSER, $datosjon) or die ("Error al escribir en el fichero.");
}

function modeloUserDel($user){
    unset($_SESSION['tusuarios'][$user]);
    ctlUserVerUsuarios();
    modeloUserSave();
}

function modeloUserUpdate ($user){ /*Actualiza un usuario en la sesión y en el JSON*/
    $_SESSION['tusuarios'][$user][0] = $_GET['password'];
    $_SESSION['tusuarios'][$user][1] = $_GET['nombre'];
    $_SESSION['tusuarios'][$user][2] = $_GET['correo'];
    $_SESSION['tusuarios'][$user][3] = $_GET['plan'];
    $_SESSION['tusuarios'][$user][4] = $_GET['estado'];
    modeloUserSave();

}
function modeloUserAdd ($user){ /*Guarda un usuario nuevo en la sesión y en el JSON*/
    $_SESSION['tusuarios'][$user][0] = $_GET['password'];
    $_SESSION['tusuarios'][$user][1] = $_GET['nombre'];
    $_SESSION['tusuarios'][$user][2] = $_GET['correo'];
    $_SESSION['tusuarios'][$user][3] = $_GET['plan'];
    $_SESSION['tusuarios'][$user][4] = $_GET['estado'];
    modeloUserSave();
}