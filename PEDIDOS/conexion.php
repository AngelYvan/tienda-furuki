<?php


$servidor = "localhost"; 
$usuario = "root"; 
$contrasenha = ""; 
$BD = "finalfinal"; 

$conexion = mysqli_connect($servidor, $usuario, $contrasenha, $BD);

if (!$conexion) {
	echo "No se logró la conexión";
    die("Connection failed: " . mysqli_connect_error());
} 
?>
