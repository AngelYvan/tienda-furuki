<?php
	include("conexion.php");
	$cod=$_GET['cod'];
	
	mysqli_select_db($conexion, $BD);
	$consulta = "SELECT * FROM `chefsito` WHERE dni_chef='$cod'";
	$datos = mysqli_query($conexion, $consulta);
	
	while($fila = mysqli_fetch_array($datos)) { 
		$DNI=$fila['dni_chef1'];
		$nom= $fila['nombre_chef1'];
		$ape= $fila['apellido_chef1'];
		$clave1 =$fila['CLAVE1'];

		
		echo '<form action="update.php" method="POST"> 
			<input type="hidden" name="codigo" value="'.$DNI.'"/><br>
			<p> Nombre       :</p><input type="texto" name="nombre" value="'.$nom.'"/> <br>
			<p> Apellido     :</p><input type="texto" name="apellido" value="'.$ape.'"/> <br>
			<p> clave        :</p><input type="texto" name="clave" value="'.$clave1.'"/> <br> <br>

			<input type="submit" name="enviar" value="Actualizar">
		</form>'; 
	}


?>
