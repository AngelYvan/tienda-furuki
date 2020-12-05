<?php
session_start();
include("conexion.php");
?>
	
<html>
<head>
	<title>CLIENTES</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>
</head>
<body>





<!-- /Navegacion -->

<br>

<div class="row">

  <div class="medium-7 large-6 columns">
    <h1>CLIENTES</h1>
    <p class="subheader"></p>
    <a href="chef.php"><button class="button" >Chefs</button></a>
    <a href="clientes.php"><button class="button" >Clientes</button></a>
     <a href="ingreso.php"><button class="button" >Regresar</button></a>
  </div>

  

  <div class="medium-5 large-3 columns">
    <div class="callout secondary">
      <form action="cerrarsesion.php" method="POST">
        <div class="row">
          <div class="small-12 columns">
           
			<button type="submit" class="button">Cerrar Sesión</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>




<center><b><i><FONT COLOR="black" FACE="Bookman Old Style" size="6" height="40" width="1000" align=center> PEDIDOS Y CLIENTES </FONT></br><br></b></i></center>
<br>
    <center>
	<table border='1'> 
		<!--generamos la tabla -->
		<tr>
			<!-- nombres de los campos de la tabla -->
			<td>DNI</td>
			<td>NOMBRE</td>
			<td>DIRECCION</td>  
			<td>TELEFONO</td>
			<td>DISTRITO</td>	
		</tr>
		

		<?php
        $consulta= "SELECT* FROM `cliente` ";
        $datos = mysqli_query($conexion, $consulta);

		while($fila=mysqli_fetch_array($datos)){
		 ?>

		<tr>
			<td><?php echo $fila['DNI_cliente'] ?></td>  
			<td><?php echo $fila['nom_cliente'] ?></td>
			<td><?php echo $fila['direc_cliente'] ?></td>
			<td><?php echo $fila['distrito_cliente'] ?></td>
			<td><?php echo $fila['telf_cliente'] ?></td>
			<td><a href="eliminar1.php?cod=<?php echo $fila['DNI_cliente'] ?>">ELIMINAR</a></td>	
			<td><a href="actualizar1.php?cod=<?php echo $fila['DNI_cliente'] ?>">ACTUALIZAR</a></td>	
		</tr>
	<?php 
	}
	 ?>
	</table>
	</center>
</body>
</html>