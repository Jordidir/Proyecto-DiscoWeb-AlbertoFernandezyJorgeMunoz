<?php

ob_start();

?>

<?php
$auto = $_SERVER['PHP_SELF'];

?>
<form id="form-registro" action='index.php' method="GET">
	<label>Usuario</label><input maxlength="10" minlength="5" class="cuadro" name="usuario" type="text" placeholder="Introduzca un usuario"><br>
	<label>Nombre</label><input maxlength="20" class="cuadro" name="nombre" type="text" placeholder="Introduzca nombre y apellido"><br>
	<label>Correo electrónico</label><input class="cuadro" name="correo" type="email" placeholder="Introduzca una dirección de correo"><br>
	<label>Contraseña</label><input maxlength="15" minlength="8" class="cuadro" name="password" type="password" placeholder="Introduzca la contraseña"><br>
	<br>
	<label>Plan</label>
		<select id="planes" name="plan">
			<option value='0'>Básico</option>
			<option value='1'>Profesional</option>
			<option value='2'>Premium</option>
			<option value='3'>Máster</option>		
		</select>
	<br>
	<input id="estadoOculto" value="I" type="text" name="estado">
	<input class="boton-basico" type='submit' name='orden' value="Registrar">
	<input class="boton-basico" type='submit' value='Cancelar'>
</form>

<?php

$contenido = ob_get_clean();
include_once "principal.php";
?>