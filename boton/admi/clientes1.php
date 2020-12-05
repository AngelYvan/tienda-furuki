<?php
session_start();
include("conexion.php");
?>
	
<html>
<head>
	<title>CLIENTES</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../../img/5.jpeg" type="image/x-icon">
    </head>
</head>
<body>


<br>


    <h1>CLIENTES</h1>
    
    <a href="chef1.php"><button class="button" >Chefs</button></a>
    <a href="clientes1.php"><button class="button" >Clientes</button></a>
     <a href="ingreso1.php"><button class="button" >Regresar</button></a>
      <a href="ingresarchef.php"><button class="button" >Registro chef</button></a>

  
           
		
          




<center><b><i><FONT COLOR="black" size="6" height="40" width="1000" align=center> PEDIDOS Y CLIENTES </FONT></br><br></b></i></center>
<br>
    <center>
	<table border='1'> 
		
		<tr>
			
			<td>DNI</td>
			<td>NOMBRE DEL CLIENTE</td>
			<td>DIRECCIÓN</td>
			<td>DISTRITO</td>	
			<td>TELÉFONO</td>
		</tr>
		

		<?php
        $consulta= "SELECT * FROM `cliente` ";
        $datos = mysqli_query($conexion, $consulta);

		while($fila=mysqli_fetch_array($datos)){
		 ?>

		<tr>
			<td><?php echo $fila['DNI_cliente'] ?></td>  
			<td><?php echo $fila['nom_cliente'] ?></td>
			<td><?php echo $fila['direc_cliente'] ?></td>
			<td><?php echo $fila['distrito_cliente'] ?></td>
			<td><?php echo $fila['telf_cliente'] ?></td>

			
			<td><a href="actualizar1.php?cod=<?php echo $fila['DNI_cliente'] ?>">ACTUALIZAR</a></td>	
		</tr>
	<?php 
	}
	 ?>
	</table>
	</center>
</body>
</html>