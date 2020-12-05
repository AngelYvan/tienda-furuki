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



<!-- /Navegacion -->

<br>

    <h1>CHEFS</h1>
    
    <a href="chef1.php"><button class="button" >Chefs</button></a>
    <a href="clientes1.php"><button class="button" >Clientes</button></a>
    <a href="ingreso1.php"><button class="button" >Regresar</button></a>
     <a href="ingresarchef.php"><button class="button" >Registro chef</button></a>
  

  

    







<center><b><i><FONT COLOR="black" FACE="Bookman Old Style" size="6" height="40" width="1000" align=center> DATOS DE CHEFS  </FONT></br><br></b></i></center>
<br>
    <center>
	<table border="1" > 
		
		<tr>
			
			<td>CODIGO</td>
			<td>NOMBRE</td>
			<td>APELLIDO</td>  
	        <td>CLAVE</td>  
		</tr>

		<?php
        $consulta= "SELECT * FROM `chefsito` ";
        $datos = mysqli_query($conexion, $consulta);

		while($fila=mysqli_fetch_array($datos)){
		 ?>

		<tr>
			<td><?php echo $fila['dni_chef1'] ?></td>  
			<td><?php echo $fila['nombre_chef1'] ?></td>
			<td><?php echo $fila['apellido_chef1'] ?></td>
			<td><?php echo $fila['CLAVE1'] ?></td>
			<td><a href="eliminar.php?cod=<?php echo $fila['dni_chef1'] ?>">ELIMINAR</a></td>	
			<td><a href="actualizar.php?cod=<?php echo $fila['dni_chef1'] ?>">ACTUALIZAR</a></td>	
		</tr>
	<?php 
	}
	 ?>
	</table>
	
	</center>
</body>
</html>