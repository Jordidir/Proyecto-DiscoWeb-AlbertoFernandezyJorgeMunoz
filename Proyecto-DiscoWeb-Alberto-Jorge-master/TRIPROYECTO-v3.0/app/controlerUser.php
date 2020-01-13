<?php

include_once 'config.php';
include_once 'modeloUser.php';


function ctlUserInicio(){
    $msg = "";
    $user ="";
    $clave ="";
    if ( $_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['user']) && isset($_POST['clave'])){
            $user = $_POST['user'];
            $clave= $_POST['clave'];

            if (modeloOkUser($user,$clave)){
                $_SESSION['user'] = $user;
                $_SESSION['tipouser'] = modeloObtenerTipo($user);

                if (modeloObtenerActivo($user) != "I") {
                    if ( $_SESSION['tipouser'] == "3"){
                        $_SESSION['modo'] = GESTIONUSUARIOS;
                        header('Location:index.php?orden=VerUsuarios');
                    }
                    else {
                        $_SESSION['modo'] = GESTIONFICHEROS;
                        header('Location:index.php?orden=Mis+Archivos');
                    }
                }else{
                    $msg="Error: usuario no activado, espere la activación del administrador!";
                }
                
            }
            else {
                $msg="Error: usuario y contraseña no válidos!";
            } 
        }
    }
    
    include_once 'plantilla/facceso.php';
}

function ctlUserCerrar(){
    session_destroy();
    modeloUserSave();
    header('Location:index.php');
}

function ctlUserVerUsuarios (){
    $usuarios = modeloUserGetAll(); 
    include_once 'plantilla/verusuariosp.php';
}

function ctlUserBorrar(){
    $id=$_GET['id'];
    ctlFileBorrarDir($id);
    modeloUserDel($id);
}

function ctlUserDetalles(){
    $usuario = modeloUserGet($_GET['id']);
    include_once 'plantilla/detalles.php';
}

function ctlUserModificar(){
    $usuario = modeloUserGet($_GET['id']);
    include_once 'plantilla/modificar.php';  
}
function ctlUserCambiar(){
    $usuario = modeloUserGet($_GET['id']);
    include_once 'plantilla/cambiar.php';  
}

function ctlUserAlta(){
    include_once 'plantilla/registro.php';
}

function ctlUserAceptarModificar(){
    $id=$_GET['usuario'];
    modeloUserUpdate($id);
    ctlUserVerUsuarios();
}
function ctlUserAceptarCambiar(){
    $id=$_GET['usuario'];
    modeloUserUpdate($id);
    ctlUserMisArchivos();
}

function ctlUserRegistrarAlta(){
    $id=$_GET['usuario'];
    modeloUserAdd($id);
    ctlFileCrearDir($id);
    include_once 'plantilla/facceso.php';
}

function ctlUserMisArchivos(){
    $datos = modeloFileRecorrerDir($_SESSION['user']);
    include_once 'plantilla/misArchivos.php';
    
}