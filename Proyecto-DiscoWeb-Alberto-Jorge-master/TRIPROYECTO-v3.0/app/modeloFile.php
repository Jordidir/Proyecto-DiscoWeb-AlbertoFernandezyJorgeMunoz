<?php

function modeloFileRecorrerDir($user){
    $path = "app/dat/".$user;
    $dir = opendir($path);
    $archivos  = scandir($path);


    foreach ($archivos as $clave => $elemento) { 

        if ($elemento != "." and $elemento != "..") {
        	$elementRuta = $path."/".$elemento;

        	$datos[$elemento][0] = date("F d Y H:i:s", filectime($elementRuta));
        	$datos[$elemento][1] = filesize($elementRuta)." KB";
	        
	        $terminacion = explode(".", $elementRuta);
			switch ($terminacion[1]) {
				case "jpg":
					$datos[$elemento][2] = "Archivo jpg";
				 	break;

				case "gif":
					$datos[$elemento][2] = "Archivo gif";
				   	break;

				case "png":
					$datos[$elemento][2] = "Archivo png";
				    break;

				case "txt":
					$datos[$elemento][2] = "Archivo txt";
				    break;
				    
				case "pdf":
					$datos[$elemento][2] = "Archivo pdf";
				    break;

				default:
				   	$datos[$elemento][2] = "Formato desconocido";
			}
        }
        
    }
    closedir($dir); 
    return $datos;

}

function modeloFileCrearDir($usuario){
	mkdir("app/dat/".$usuario, 0700);
}

function modeloFileBorrarDir($usuario){
	rmdir("app/dat/".$usuario);
}

function modeloFileBorrarArchivo($archivo, $usuario){
    if (file_exists("app/dat/".$usuario."/".$archivo)) {
    	unlink("app/dat/".$usuario."/".$archivo);
    }
    ctlUserMisArchivos();
}

function modeloFileRenombrar($archivo, $usuario, $nuevo){
	if (file_exists("app/dat/".$usuario."/".$archivo)) {
		rename("app/dat/".$usuario."/".$archivo, "app/dat/".$usuario."/".$nuevo);
    	
	}
	ctlUserMisArchivos();
}
function  modeloFileSubirArchivo($nombre, $temporalNombre){

}