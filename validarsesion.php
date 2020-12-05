<?php
	session_start(); 		//para trabajar con sesiones, se coloca en cada archivo.  
	
//	error_reporting(0);  
	
	$nusuario=$_POST["usuario"];
	$clave=$_POST["clave"];
	
	$_SESSION["usuario"]= $nusuario;
	
	
	//realizando la conexión
	//$conexion=mysqli_connect('localhost','root','','pruebas') or die('Error en la conexion servidor');
	include("conexion.php");
	
	$consulta="SELECT * FROM chefs WHERE nombre_chef='$nusuario' and CLAVE='$clave'";
	$resultado=mysqli_query ($conexion,$consulta) or die ('Error en el query database');
	
	$filas=mysqli_num_rows($resultado);

	if ($filas>0) {
		header("location:ingreso.php");
	} else {
		//echo "Error en la autenticación";
		header("location:index.php");
	}
	mysqli_free_result($resultado);   //para que libere el espacio de memoria
	mysqli_close($conexion);   //para cerrar la conexión y que no consuma recursos
?>
