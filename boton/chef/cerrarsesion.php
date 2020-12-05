<?php
	session_start();
	error_reporting(0);  
	
	//$varsesion = $_session['usuario'];
	/*if ($varsesion == null || $varsesion = ''){
		 echo 'Usted no tiene autorización';
		 die();
	}*/
	session_destroy();
	header("Location:index.php");
?>