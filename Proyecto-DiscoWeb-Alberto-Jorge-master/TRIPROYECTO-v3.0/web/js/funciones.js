function confirmarBorrar(nombre,id){
    if (confirm("¿Quieres eliminar el usuario:  "+nombre+"?"))
    {
        document.location.href="?orden=Borrar&id="+id;
    }
}

function confirmarBorrarArchivo(archivo,usuario){
    if (confirm("¿Quieres eliminar el archivo:  "+archivo+"?"))
    {
        document.location.href="?orden=BorrarArchivo&archivo="+archivo+"&usuario="+usuario;
    }
}

function cambiarNombre(archivo,usuario){
    var nuevo = prompt("Introduzca el nuevo nombre", archivo);
    document.location.href="?orden=Renombrar&nuevo="+nuevo+"&archivo="+archivo+"&usuario="+usuario;

}



function desplegar(){
		document.getElementById('form-acceso').style.display="block";
		document.getElementById('desplegar').style.display="none";
		document.getElementById('plegar').style.display="block";
}

function plegar(){
	document.getElementById('form-acceso').style.display="none";
	document.getElementById('plegar').style.display="none";
	document.getElementById('desplegar').style.display="block";
}