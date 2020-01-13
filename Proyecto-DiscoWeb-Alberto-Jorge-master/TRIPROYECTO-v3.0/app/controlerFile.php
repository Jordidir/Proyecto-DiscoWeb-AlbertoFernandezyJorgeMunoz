<?php
// --------------------------------------------------------------
// Controlador que realiza la gestión de ficheros de un usuario
// ---------------------------------------------------------------
include_once 'config.php';
include_once 'modeloFile.php';


function ctlFileCrearDir($user){
	modeloFileCrearDir($user);
}

function ctlFileBorrarDir($user){
	modeloFileBorrarDir($user);
}

function ctlFileBorrarArchivo(){
	$archivo=$_GET['archivo'];
	$usuario=$_GET['usuario'];
	modeloFileBorrarArchivo($archivo, $usuario);
}

function ctlFileRenombrar(){
	$nuevo=$_GET['nuevo'];
	$archivo=$_GET['archivo'];
	$usuario=$_GET['usuario'];
	modeloFileRenombrar($archivo, $usuario, $nuevo);
}

function ctlFileSubirArchivo(){
	$nombre=$_FILES['archivo']['name'];
	$temporalNombre=$_FILES['archivo']['tmp_name'];
	modeloFileSubirArchivo($nombre, $temporalNombre);
}