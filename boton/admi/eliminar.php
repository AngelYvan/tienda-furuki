<?php

include("conexion.php");

$cod=$_GET['cod'];

mysqli_select_db($conexion, $BD);
$sql = "DELETE FROM `chefsito` WHERE dni_chef1='$cod'";
mysqli_query($conexion, $sql);

?>

<html>
	<h1>  REGISTRO ELIMINADO</h1>
	<BR>
	<a href="chef1.php">REGRESAR</a>
</html>