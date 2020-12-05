<?php
session_start();
include("conexion.php");

?>


<html>

<head>
	<title>CHEFS</title>
	<meta charset="utf-8" />

	<link rel="stylesheet" href="css/BienvenidoChef.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
</head>

<body>


	<div class="topnav" id="myTopnav">

		<form action="cerrarsesion.php" method="POST">
			<a href="ingreso.php">Regresar</a>
			<a href="chef.php">Chefs</a>
			<a href="clientes.php">Clientes</a>

			<a type="submit" class="button" style="float:right">Cerrar sesión</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</form>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="jumbotron">
				<h1 class="display-4">Chefs</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quos velit iure ex, necessitatibus officiis!</p>
				<hr class="my-4">

			</div>
		</div>
		<br>

		<div class="tablaRes">
			<h4 style="color:black; font-family: 'Bookman Old Style'; align-items: center; text-align: center; font-weight: 500; font-size: 1.9em; margin-bottom: 1em;"> <em>DATOS DE CHEFS </em> </h4>
			<div style="overflow-x:auto;">
				<table>
					<!--generamos la tabla -->
					<tr>
						<!-- nombres de los campos de la tabla -->
						<th>CODIGO</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th colspan="2">OPCIONES</th>
					</tr>


					<?php
					$consulta = "SELECT dni_chef, nombre_chef, apellido_chef FROM `chefs` ";
					$datos = mysqli_query($conexion, $consulta);

					while ($fila = mysqli_fetch_array($datos)) {
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
			</div>
		</div>

	</div>
	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>


	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	<script>
		$(document).foundation();
	</script>
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/jquery/jquery-migrate.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>