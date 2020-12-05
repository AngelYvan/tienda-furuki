<?php
   	include("conexion.php");

	$DNI=$_POST['codigo'];
	$nom= $_POST['nombre'];
	$direc= $_POST['direccion'];
	$telf =$_POST['telefono'];
	$dir =$_POST['distrito'];

	
	mysqli_select_db($conexion, $BD);
	
	$consulta ="UPDATE cliente SET nom_cliente='$nom', direc_cliente='$direc',telf_cliente='$telf', distrito_cliente='$dir'  WHERE DNI_cliente='$DNI'";
	
	
	mysqli_query($conexion, $consulta);
?>
<html>
	<h1>LOS DATOS FUERON ACTUALIZADOS </h1>
	<a href="clientes1.php"> REGRESAR  </a>
</html>


