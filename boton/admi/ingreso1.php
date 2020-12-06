<?php
session_start();
include("conexion.php");
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="/css/BienvenidoChef.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

	<link rel="shortcut icon" href="../../img/5.jpeg" type="image/x-icon">
	<title>ADMINISTRATIVO</title>
	<style>
		body {
			margin: 0;
			font-family: "Raleway", Helvetica, Arial, sans-serif !important;
			margin-bottom: 4em;
		}

		.topnav {
			overflow: hidden;
			background-color: rgb(32, 32, 32);
			
		}

		.jumbotron {
			background-color: white !important;
			padding-bottom: -2em;
			margin-bottom: -2em;
		}

		.jumbotron p {
			font-size: 1em !important;
		}

		#Jumb {
			padding-top: -2em;
			margin-bottom: -4em;
			padding-bottom: 0em;
		}

		.container-fluid {
			/* padding-top: 1em; */
			padding-left: 3em;
			padding-right: 3em;
			margin-bottom: 2em;
			/* display: flex; */
			justify-content: center;
			align-items: center;
		}

		.formulario {
			padding-top: 2em;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: .8em;
			font-weight: 500;
		}

		.btn {
			font-size: .98em !important;
		}

		.form-control {
			font-size: .95em !important;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 14px;
			align-items: center;
			justify-content: center;
		}

		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}

		.topnav a.active {
			background-color: antiquewhite;
			color: white;
		}

		.topnav .icon {
			display: none;
		}

		@media screen and (max-width: 600px) {
			.topnav a:not(:first-child) {
				display: none;
			}

			.topnav a.icon {
				float: right;
				display: block;
			}
		}

		@media screen and (max-width: 600px) {
			.topnav.responsive {
				position: relative;
			}

			.topnav.responsive .icon {
				position: absolute;
				right: 0;
				top: 0;
			}

			.topnav.responsive a {
				float: none;
				display: block;
				text-align: left;
			}
		}

		.lead {
			color: rgb(14, 115, 182);
			font-weight: 600;
		}

		.callout {
			-webkit-box-shadow: 3px 3px 5px 4px #ccc;
			/* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
			-moz-box-shadow: 3px 3px 5px 4px #ccc;
			/* Firefox 3.5 - 3.6 */
			box-shadow: 3px 3px 5px 4px #ccc;
		}

		@media (max-width: 401px) {
			.container-fluid {
				padding: 1em;
			}
		}


		table {
			border-collapse: collapse;
			border-spacing: 0;
			width: 100%;
			border: 1px solid #ddd;
			border: 0;
			font-size: .75em;
			text-align: center;
			align-items: center;
		}

		table th {
			color: white;
			background-color: rgb(16, 122, 172);
			text-align: center;
		}

		th,
		td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2
		}

		.tablaRes {
			padding-left: 8em;
			padding-right: 8em;
		}

		@media (max-width: 972px) {
			.tablaRes {
				padding-left: 4em;
				padding-right: 4em;
			}
		}

		@media (max-width: 745px) {
			.tablaRes {
				padding-left: 2em;
				padding-right: 2em;
			}
		}

		@media (max-width: 612px) {
			.tablaRes {
				padding-left: 0em;
				padding-right: 0em;
			}
		}
	</style>
</head>

<body>

	<div class="topnav" id="myTopnav">

		<form action="cerrarsesion.php" method="POST">
			<a href="ingreso.php">Regresar</a>
			<a href="chef.php">Chefs</a>
			<a href="clientes.php">Clientes</a>
			<a href="ingresarcliente.php">Registro chef</a>
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
			<h4 style="color:black; font-family: 'Bookman Old Style'; align-items: center; text-align: center; font-weight: 500; font-size: 1.9em; margin-bottom: 1em;"> <em>BOLETAS </em> </h4>
			<div style="overflow-x:auto;">
				<table>
					<!--generamos la tabla -->
					<tr>
						<!-- nombres de los campos de la tabla -->
						<th>NÚMERO DE BOLETA</th>
						<th>FECHA</th>
						<th>MEDIO DE PAGO</th>
						<th>DNI DEL CLIENTE</th>
						<th>IMPORTE</th>
						<th>IGV</th>
						<th>IMPORTE TOTAL</th>
						<th>DNI DEL CHEF</th>
					</tr>


					<?php
					$consulta = "SELECT * FROM `boleta` ";
					$datos = mysqli_query($conexion, $consulta);

					while ($fila = mysqli_fetch_array($datos)) {
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