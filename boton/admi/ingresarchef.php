<?php
session_start();
include("conexion.php");
?>
	
	
<html>
<head>
	<title>REGISTRO</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../../img/5.jpeg" type="image/x-icon">
  </head>
</head>
<body>

<a href="chef1.php"><button class="button" >Chefs</button></a>
    <a href="clientes1.php"><button class="button" >Clientes</button></a>
     <a href="ingreso1.php"><button class="button" >Regresar</button></a>
      <a href="ingresarchef.php"><button class="button" >Registro chef</button></a>


<br>




<center>
<h1> DATOS PERSONALES </h1>
    <form action="grabarcliente.php" method="POST"> 
		DNI:   <input type="texto" placeholder="Ingrese su DNI" name="DNI"> <br><br>
		Nombre:   <input type="texto" placeholder="Ingrese su nombre" name="nombre"> <br><br>
		Apellido: <input type="texto" placeholder="Ingrese su apellido"name="apellido"> <br><br>
		CLAVE: <input type="texto" placeholder="Ingrese su clave" name="clave"> <br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="borrar" value="Borrar">	
   </form>
</center>   
</body>
</html>
