<?php

ob_start();
			switch ($usuario[3]) {
			case '0':
				$salida='Básico';
				break;
			case '1':
				$salida='Profesional';
				break;
			case '2':
				$salida='Premium';
				break;	
			case '3':
				$salida='Máster';
				break;						
		}
?>

<?php
$auto = $_SERVER['PHP_SELF'];

?>
<form id="form-modificar" action='index.php' method="GET">
	<label>Identificador</label><input class="cuadro" name="usuario" type="text" value="<?= $_GET['id'] ?>" disabled><br>
	<input class="cuadro-oculto" name="usuario" type="text" value="<?= $_GET['id'] ?>" hidden>
	<label>Nombre</label><input maxlength="20" class="cuadro" name="nombre" type="text" value="<?= $usuario[1] ?>"><br>
	<label>Correo electrónico</label><input class="cuadro" name="correo" type="email" value="<?= $usuario[2] ?>"><br>
	<label>Contraseña</label><input maxlength="15" minlength="8" class="cuadro" name="password" type="password" value="<?= $usuario[0] ?>"><br>
	<label>Plan</label>
	<select id="planes" name="plan">
			<option value='0' <?= ($usuario[3] == "0")?"selected":"" ?>>Básico</option>
			<option value='1' <?= ($usuario[3] == "1")?"selected":"" ?>>Profesional</option>
			<option value='2' <?= ($usuario[3] == "2")?"selected":"" ?>>Premium</option>
			<option value='3' <?= ($usuario[3] == "3")?"selected":"" ?>>Máster</option>
	</select>

	<input id="estadoOculto" value="I" type="text" name="estado">
	<input class="boton-basico" type='submit' name='orden' value="Aceptar Cambios">
	<input class="boton-basico" type='submit' value='Cancelar'>
</form>

<?php

$contenido = ob_get_clean();
include_once "principal.php";
?>