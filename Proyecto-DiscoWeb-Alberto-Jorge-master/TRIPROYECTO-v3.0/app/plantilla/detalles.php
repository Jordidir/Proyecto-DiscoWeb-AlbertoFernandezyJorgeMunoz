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

<table id="tabla-detalles">
	<tr>
	<?php
	$auto = $_SERVER['PHP_SELF'];
	?>
	<tr>
		<th>Detalles</th><th>Usuario - <?= $_GET['id'] ?></th>
	</tr>
	<tr>
		<td>Nombre completo</td> <td><?= $usuario[1] ?></td>
	</tr>
	<tr>
		<td>Correo electrónico</td> <td><?= $usuario[2] ?></td>
	</tr>
	<tr>
		<td>Plan </td><td><?= $salida ?></td>
	</tr>
	<tr>
		<td>Numero de ficheros </td><td>2 (20%)</td>
	</tr>
	<tr>
		<td>Espacio utilizado </td><td>53.8MB (14%)</td>
	</tr>

</table>
<form action='index.php'>
	<input class="boton-basico" type='submit' value='Atrás'>
</form>

<?php
$contenido = ob_get_clean();
include_once "principal.php";
?>