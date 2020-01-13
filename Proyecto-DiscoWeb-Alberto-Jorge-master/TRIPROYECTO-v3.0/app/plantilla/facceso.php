<?php 

ob_start();
?>
<div id='aviso'><b><?= (isset($msg))?$msg:"" ?></b></div>


<form id="form-acceso" name='ACCESO' method="POST" action="index.php">
	<a id="darseAlta" href="index.php?orden=Nuevo">Darse de alta</a>
	<table id="registro">
		<tr>
			<td>Usuario</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Contraseña</td>
			<td><input type="password" name="clave"></td>
		</tr>
	</table>
	<input id="boton-entrar" type="submit" name="orden" value="Entrar">
	
</form>

<img id="desplegar" src="web/img/desplegar.png" onclick="desplegar()">
<img id="plegar" src="web/img/plegar.png" onclick="plegar()">

<?php 

$contenido = ob_get_clean();
include_once "principal.php";

?>