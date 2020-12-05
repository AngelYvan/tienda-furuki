<?php
	session_start(); 		  
		
	$nusuario=$_POST["usuario"];
	$clave=$_POST["clave"];
	
	$_SESSION["usuario"]= $nusuario;
	
	include("conexion.php");
	
	$consulta="SELECT * FROM administrativos WHERE nombre_ad='$nusuario' and CLAVE2='$clave'";
	$resultado=mysqli_query ($conexion,$consulta) or die ('Error en el query database');
	
	$filas=mysqli_num_rows($resultado);

	if ($filas>0) {
		header("location:ingreso1.php");
	} else {
		header("location:index.php");
	}
	mysqli_free_result($resultado);   
	mysqli_close($conexion);   
?>
