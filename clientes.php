<?php
session_start();
include("conexion.php");
?>

<html>

<head>
	<title>CLIENTES</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/BienvenidoChef.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
</head>

<body>

	<div class="topnav" id="myTopnav">

		<form action="cerrarsesion.php" method="POST">
			<a href="chef.php">Chefs</a>
			<a href="clientes.php">Clientes</a>

			<a type="submit" class="button" style="float:right">Cerrar sesión</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</form>
	</div>

	<div class="container-fluid">
		<div class="row" id="Jumb">
			<div class="jumbotron">
				<h2 class="display-4">Clientes</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quos velit iure ex, necessitatibus officiis!</p>
				<hr class="my-4">

			</div>
		</div>
		

		<div class="tablaRes">
			<h4 style="color:black; font-family: 'Bookman Old Style'; align-items: center; text-align: center; font-weight: 500; font-size: 1.5em; margin-bottom: 1em;"> <em>PEDIDOS Y CLIENTES</em> </h4>
			<div style="overflow-x:auto;">
				<table>
					<!--generamos la tabla -->
					<tr>
						<!-- nombres de los campos de la tabla -->
						<th>DNI</th>
						<th>NOMBRE</th>
						<th>DIRECCION</th>
						<th>TELEFONO</th>
						<th>DISTRITO</th>
						<th colspan="2">OPCIONES</th>
					</tr>


					<?php
					$consulta = "SELECT* FROM `cliente` ";
					$datos = mysqli_query($conexion, $consulta);

					while ($fila = mysqli_fetch_array($datos)) {
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
			</div>
		</div>

		
		<!-- <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Pedidos registrados por el usuario</h4>
					</div>
					<div class="modal-body">
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>
	</div> -->



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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>