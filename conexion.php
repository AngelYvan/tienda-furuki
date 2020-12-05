<?php

//variables para la conexión
$servidor = "localhost"; //el servidor que utilizaremos, en este caso será el localhost
$usuario = "root"; //El usuario de la base de datos
$contrasenha = ""; //La contraseña del usuario que utilizaremos
$BD = "finalfinal"; //El nombre de la base de datos

// Crea conexión
$conexion = mysqli_connect($servidor, $usuario, $contrasenha, $BD);

// Verifica conexión
if (!$conexion) {
	echo "No se logró la conexión";
    die("Connection failed: " . mysqli_connect_error());
} 
?>
