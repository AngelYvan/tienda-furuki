<?php
   	include("conexion.php");

	$DNI=$_POST['codigo'];
	$nom= $_POST['nombre'];
	$direc= $_POST['direccion'];
	$telf =$_POST['telefono'];
	$dir =$_POST['distrito'];

	
	mysqli_select_db($conexion, $BD);
	
	$consulta ="UPDATE cliente SET nom_cliente='$nom', direc_cliente='$direc',telf_cliente='$telf', distrito_cliente='$dir'  WHERE DNI_cliente='$DNI'";
	
	//$sql = "UPDATE `veterinario` SET nom_ve='".$_POST["nombre"]."', ape_ve ='".$_POST["apellido"]."', dir_ve = '".$_POST["direccion"]."', telefono_ve = '".$_POST["telefono"]."', email_ve = '".$_POST["email"]."' clave = '".$_POST["clave"]."'  WHERE cod_ve='$cod_ve'";
	mysqli_query($conexion, $consulta);
?>
<html>
	<h1>LOS DATOS FUERON ACTUALIZADOS </h1>
	<a href="clientes.php"> REGRESAR A LA PAGINA PRINCIPAL </a>
</html>


