<?php
   	include("conexion.php");

	$cod_ve=$_POST['codigo'];
	$nom_ve= $_POST['nombre'];
	$ape_ve= $_POST['apellido'];
	$clave =$_POST['clave'];

	/*	echo $cod_ve . " es el codigo<br>";
		echo $nom_ve ." es el nombre<br>";
		echo $ape_ve ." apellido<br>";
		echo $dir_ve ."dirección<br>";
		echo $telefono_ve ."telefono<br>";
		echo $email_ve ."email<br>";
		echo $clave ."clave<br>"; 	*/
	
	mysqli_select_db($conexion, $BD);
	
	$consulta ="UPDATE CHEFS SET nombre_chef='$nom_ve', apellido_chef='$ape_ve', CLAVE='$clave' WHERE dni_chef='$cod_ve'";
	
	//$sql = "UPDATE `veterinario` SET nom_ve='".$_POST["nombre"]."', ape_ve ='".$_POST["apellido"]."', dir_ve = '".$_POST["direccion"]."', telefono_ve = '".$_POST["telefono"]."', email_ve = '".$_POST["email"]."' clave = '".$_POST["clave"]."'  WHERE cod_ve='$cod_ve'";
	mysqli_query($conexion, $consulta);
?>
<html>
	<h1>LOS DATOS FUERON ACTUALIZADOS </h1>
	<a href="chef.php"> REGRESAR A LA PAGINA PRINCIPAL </a>
</html>


