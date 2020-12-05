<?php

include("conexion.php");

$cod=$_GET['cod'];

mysqli_select_db($conexion, $BD);
$sql = "DELETE FROM `cliente` WHERE DNI_cliente='$cod'";
mysqli_query($conexion, $sql);

?>

<html>
	<h1>  REGISTRO ELIMINADO</h1>
	<BR>
	<a href="clientes.php">... Presione cualquier tecla para continuar ...</a>
</html>