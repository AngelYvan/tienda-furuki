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
    <title>CHEF</title>
  
  </head>
  <body>


<br>
<center>
    <h1>BIENVENIDO CHEF</h1> </center>
    <p class="subheader"></p>
    <a href="chef.php"><button class="button" >Chefs</button></a>
    <a href="clientes.php"><button class="button" >Clientes</button></a>
  
 
      <form action="cerrarsesion.php" method="POST">
        
			<button type="submit" class="button">Cerrar Sesión</button>
       
      </form>
    

<br>
<br>



<center><b><i><FONT COLOR="black"  size="6" height="40" width="1000" align=center> PRODUCTOS </FONT></br><br></b></i></center>
<br>
    <center>
	<table border="1" > 
		
		<tr>
			
			<td>CÓDIGO DEL PRODUCTO</td>
			<td>NOMBRE DEL PRODUCTO</td>
			<td>PRECIO</td>  
	        <td>STOCK</td>
		</tr>

		<?php
        $consulta= "SELECT * FROM `producto` ";
        $datos = mysqli_query($conexion, $consulta);

		while($fila=mysqli_fetch_array($datos)){
		 ?>

		<tr>
			<td><?php echo $fila['cod_produc'] ?></td>  
			<td><?php echo $fila['nom_produc'] ?></td>
			<td><?php echo $fila['precio'] ?></td>
			<td><?php echo $fila['stock'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
	
	</center>



   </body>
</html>
