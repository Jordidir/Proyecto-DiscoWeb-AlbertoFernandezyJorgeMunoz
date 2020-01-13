<?php ob_start(); ?>
<form action='index.php' method="get" enctype="multipart/form-data">
	<input type='file' name='archivo'>
	<input class="boton-basico" type="submit" name="orden" value="Subir Archivo">
</form>

<table id="tabla-archivos">
	<tr>
		<th>Nombre</th>
		<th>Fecha</th>
		<th>Tamaño</th>
		<th>Tipo</th>
		<th colspan="3">Operaciones</th>
	</tr>
	<tr>
		<?php
		$auto = $_SERVER['PHP_SELF'];
		?>
		<?php foreach ($datos as $clave => $elemento) : ?>		
			<td class="celda">
				<?= $clave ?>
			</td> 
	
		<?php for($j=0; $j < count($elemento); $j++) :?>
		    <td class="celda"> 
		     	<?=$elemento[$j] ?>
			</td>
		<?php endfor;?>
		<td class="celda">
			<a href="#" onclick="confirmarBorrarArchivo('<?= $clave."','".$_SESSION['user']."'"?>);" ><img id="papelera" src="web/img/papelera.png" title="Borrar archivo"></a>
		</td>
		<td class="celda">
			<a href="#" onclick="cambiarNombre('<?= $clave."','".$_SESSION['user']."'"?>);" ><img id="corregir" src="web/img/corregir.png" title="Borrar archivo"></a>
		</td>
		<td class="celda"> 
			<a href="<?= $auto?>?orden=CompartirArchivo&id=<?= $clave ?>"><img id="compartir" src="web/img/compartir.png" title="Compartir archivo">
			</a>
		</td>
	</tr>
		<?php endforeach; ?>
</table>
<a id="quitarEstilo" href="<?= $auto?>?orden=Cambiar&id=<?= $_SESSION['user'] ?>"><button class="boton-basico">Cambiar</button></a>
<form action='index.php'>
	<input class="boton-basico" type='submit' value='Atrás'>
	<input class="boton-basico" type='submit' name='orden' value='Cerrar'> 
	
</form>

<?php
$contenido = ob_get_clean();
include_once "principal.php";
?>