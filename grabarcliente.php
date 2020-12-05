<?php
	session_start();
	include("conexion.php");
	
	
	
	$consulta="INSERT INTO cliente 
	VALUES('".$_POST["DNI"]."','".$_POST["nombre"]."','".$_POST["direccion"]."','".$_POST["telefono"]."')";
	
	$resultado=mysqli_query ($conexion,$consulta) or die ('Error en el query database');
	mysqli_close($conexion);
	
	/*echo 'El DNI es: '.$_POST["DNI"].'<br>';
	echo 'El nombre es: '.$_POST["nombre"].'<br>';
	echo 'El apellido es: '.$_POST["apellido"].'<br>';
	echo 'La direccion es: '.$_POST["direccion"].'<br>';
	echo 'El telefono es: '.$_POST["telefono"].'<br>';
	echo 'El DNI es: '.$_POST["email"].'<br>'; */

?>

<html>
	<h1> Se grabó exitosamente al cliente nuevo </h1>
	<a href="ingresarcliente.php"> Regresar a la página principal</a>
</html>