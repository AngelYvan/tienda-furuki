<?php
session_start();
include("conexion.php");

?>
	
	
<html>
<head>
	<title>CHEFS</title>
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
    <h1>CHEFS</h1>
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






<center><b><i><FONT COLOR="black" FACE="Bookman Old Style" size="6" height="40" width="1000" align=center> DATOS DE CHEFS  </FONT></br><br></b></i></center>
<br>
    <center>
	<table border="1" > 
		<!--generamos la tabla -->
		<tr>
			<!-- nombres de los campos de la tabla -->
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
			<td><a href="eliminar.php?cod=<?php echo $fila['dni_chef'] ?>">ELIMINAR</a></td>	
			<td><a href="actualizar.php?cod=<?php echo $fila['dni_chef'] ?>">ACTUALIZAR</a></td>	
		</tr>
	<?php 
	}
	 ?>
	</table>
	
	</center>
</body>
</html>