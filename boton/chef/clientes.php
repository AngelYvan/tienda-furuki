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
    <p class="subheader"></p>
    <a href="chef.php"><button class="button" >Chefs</button></a>
    <a href="clientes.php"><button class="button" >Ordenes</button></a>
     <a href="ingreso.php"><button class="button" >Regresar</button></a>


<center><b><i><FONT COLOR="black" size="6" height="40" width="1000" align=center> PEDIDOS Y CLIENTES </FONT></br><br></b></i></center>
<br>
    <center>
	<table border='1'> 
		
		<tr>
			
			<td>NÚMERO DE BOLETA</td>
			<td>CÓDIGO DEL PRODUCTO</td>
			<td>CANTIDAD</td>
			
		</tr>
		

		<?php
        $consulta= "SELECT* FROM `detalle boleta` ";
        $datos = mysqli_query($conexion, $consulta);

		while($fila=mysqli_fetch_array($datos)){
		 ?>

		<tr>
			<td><?php echo $fila['num_bolet'] ?></td>  
			<td><?php echo $fila['cod_produc'] ?></td>
			<td><?php echo $fila['cant_produc'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	</center>
</body>
</html>