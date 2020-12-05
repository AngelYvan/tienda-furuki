<?php

include("conexion.php");

$cod=$_GET['cod'];

mysqli_select_db($conexion, $BD);
$sql = "DELETE FROM `chefs` WHERE dni_chef='$cod'";
mysqli_query($conexion, $sql);

?>

<html>
	<h1>  REGISTRO ELIMINADO</h1>
	<BR>
	<a href="chef.php">... Presione cualquier tecla para continuar ...</a>
</html>