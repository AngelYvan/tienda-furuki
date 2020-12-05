<?php
   	include("conexion.php");

	$DNI=$_POST['codigo'];
	$nom= $_POST['nombre'];
	$ape= $_POST['apellido'];
	$clave1 =$_POST['clave'];
	
	mysqli_select_db($conexion, $BD);
	
	$consulta ="UPDATE CHEFSITO SET nombre_chef1='$nom_ve', apellido_chef1='$ape_ve', CLAVE1='$clave' WHERE dni_chef1='$cod_ve'";
	
	mysqli_query($conexion, $consulta);
?>
<html>
	<h1>LOS DATOS FUERON ACTUALIZADOS </h1>
	<a href="chef1.php"> REGRESAR  </a>
</html>


