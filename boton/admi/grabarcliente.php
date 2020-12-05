<?php
	session_start();
	include("conexion.php");
	
	
	
	$consulta="INSERT INTO chefsito 
	VALUES('".$_POST["DNI"]."','".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["clave"]."')";
	
	$resultado=mysqli_query ($conexion,$consulta) or die ('Error en el query database');
	mysqli_close($conexion);
	
	

?>

<html>
	<h1> Se grabó exitosamente al chef nuevo </h1>
	<?php echo 'El DNI es: '.$_POST["DNI"].'<br>';
	echo 'El nombre es: '.$_POST["nombre"].'<br>';
	echo 'El apellido es: '.$_POST["apellido"].'<br>';
	echo 'Su clave es: '.$_POST["clave"].'<br>';
	
	?>
	<a href="ingresarchef.php"> Regresar </a>
</html>