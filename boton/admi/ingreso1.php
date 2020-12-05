<?php
	session_start();
	include("conexion.php");
?>

<!doctype html>
<html >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="../../img/5.jpeg" type="image/x-icon">
    <title>ADMINISTRATIVO</title>
  
  </head>
  <body>


<br>

    <h1>BIENVENIDO ADMINISTRATIVOS</h1>
    <p class="subheader"></p>
    <a href="chef1.php"><button class="button" >Chefs</button></a>
    <a href="clientes1.php"><button class="button" >Clientes</button></a>
    <a href="ingresarcliente.php"><button class="button" >Registro chef</button></a>
 
      <form action="cerrarsesion.php" method="POST">
        
			<button type="submit" class="button">Cerrar Sesión</button>
       
      </form>
    

<br>
<br>





<center><b><i><FONT COLOR="black"  size="6" height="40" width="1000" align=center> BOLETAS </FONT></br><br></b></i></center>
<br>
    <center>
	<table border="1" > 
		
		<tr>
			
			<td>NÚMERO DE BOLETA</td>
			<td>FECHA</td>
			<td>MEDIO DE PAGO</td>  
	        <td>DNI DEL CLIENTE</td>
			<td>IMPORTE</td>
			<td>IGV</td>
			<td>IMPORTE TOTAL</td>
			<td>DNI DEL CHEF</td>
		</tr>

		<?php
        $consulta= "SELECT * FROM `boleta` ";
        $datos = mysqli_query($conexion, $consulta);

		while($fila=mysqli_fetch_array($datos)){
		 ?>

		<tr>
			<td><?php echo $fila['num_bolet'] ?></td>  
			<td><?php echo $fila['fech_bolet'] ?></td>
			<td><?php echo $fila['medpago'] ?></td>
			<td><?php echo $fila['DNI_cliente'] ?></td>
			<td><?php echo $fila['import_bolet'] ?></td>
			<td><?php echo $fila['IGV_bolet'] ?></td>
			<td><?php echo $fila['import_total_bolet'] ?></td>
			<td><?php echo $fila['dni_chef'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>
	
	</center>
   </body>
</html>
