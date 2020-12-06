<?php
session_start();
include("conexion.php");

?>
	
	
<html>
<head>
	<title>CHEFS</title>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="../../img/5.jpeg" type="image/x-icon">
  </head>
</head>
<body>


<br>
    <h1>CHEFS</h1>
    <p class="subheader"></p>
    <a href="chef.php"><button class="button" >Chefs</button></a>
    <a href="clientes.php"><button class="button" >Ordenes</button></a>
    <a href="ingreso.php"><button class="button" >Regresar</button></a>
  
<center><b><i><FONT COLOR="black" FACE="Bookman Old Style" size="6" height="40" width="1000" align=center> DATOS DE CHEFS  </FONT></br><br></b></i></center>
<br>
    <center>
	<table border="1" > 
		
		<tr>
			
			<td>CODIGO</td>
			<td>NOMBRE</td>
			<td>APELLIDO</td>  
	
		</tr>

		<?php
        $consulta= "SELECT dni_chef, nombre_chef, apellido_chef FROM `chefs` ";
        $datos = mysqli_query($conexion, $consulta);

		while($fila=mysqli_fetch_array($datos)){
		 ?>

		<tr>
			<td><?php echo $fila['dni_chef'] ?></td>  
			<td><?php echo $fila['nombre_chef'] ?></td>
			<td><?php echo $fila['apellido_chef'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	
	</center>
</body>
</html>