<?php
session_start();
include_once 'app/config.php';
include_once 'app/controlerFile.php';
include_once 'app/controlerUser.php';
include_once 'app/modeloUser.php';
$rutasUser = [
    "Entrar"                => "ctlUserEntrar",
    "Inicio"                => "ctlUserInicio",
    "Detalles"              => "ctlUserDetalles",
    "Borrar"                => "ctlUserBorrar",
    "Cerrar"                => "ctlUserCerrar",
    "VerUsuarios"           => "ctlUserVerUsuarios",
    "Nuevo"                 => "ctlUserAlta",
    "Registrar"             => "ctlUserRegistrarAlta",
    "Modificar"             => "ctlUserModificar",
    "Aceptar"               => "ctlUserAceptarModificar",
    "Cambiar"               => "ctlUserCambiar",
    "Aceptar Cambios"       => "ctlUserAceptarCambiar",
    /*A partir de aqui las modificaciones de ficheros*/
    "Mis Archivos"          => "ctlUserMisArchivos",
    "BorrarArchivo"         => "ctlFileBorrarArchivo", 
    "Subir Archivo"         => "ctlFileSubirArchivo", 
    "Renombrar"             => "ctlFileRenombrar", 
    "DescargarArchivo"      => "ctlFileDescargarArchivo" 
];
if (!isset($_SESSION['user'])){
    modeloUserInit();
    $procRuta = "ctlUserInicio";
    if (isset($_GET['orden'])){
        if ( isset ($rutasUser[$_GET['orden']]) ){
            $procRuta =  $rutasUser[$_GET['orden']];
        }
    }
} else {
    if ( $_SESSION['modo'] == GESTIONUSUARIOS){
        if (isset($_GET['orden'])){
            if ( isset ($rutasUser[$_GET['orden']]) ){
                $procRuta =  $rutasUser[$_GET['orden']];
            }
            else {
                header('Status: 404 Not Found');
                echo '<html><body><h1>Error 404: No existe la ruta <i>' .
                    $_GET['ctl'] .
                    '</p></body></html>';
                    exit;
            }
        }
        else {
            $procRuta = "ctlUserVerUsuarios";
        }
    }else{
        if (isset($_GET['orden'])){
            if ( isset ($rutasUser[$_GET['orden']]) ){
                $procRuta =  $rutasUser[$_GET['orden']];
            }
            else {
                header('Status: 404 Not Found');
                echo '<html><body><h1>Error 404: No existe la ruta <i>' .
                    $_GET['ctl'] .
                    '</p></body></html>';
                    exit;
            }
        }
    }
}

$procRuta();