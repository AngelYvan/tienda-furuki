<?php
	include("conexion.php");
	$cod=$_GET['cod'];
	
	mysqli_select_db($conexion, $BD);
	$consulta = "SELECT * FROM `chefs` WHERE dni_chef='$cod'";
	$datos = mysqli_query($conexion, $consulta);
	
	while($fila = mysqli_fetch_array($datos)) { 
		$cod_ve=$fila['dni_chef'];
		$nom_ve= $fila['nombre_chef'];
		$ape_ve= $fila['apellido_chef'];
		$clave =$fila['CLAVE'];
		
		/*echo $cod_ve;
		echo $nom_ve;
		echo $ape_ve;
		echo $dir_ve;
		echo $telefono_ve;
		echo $email_ve;
		echo $clave ; */
		
		echo '<form action="update.php" method="POST"> 
			<input type="hidden" name="codigo" value="'.$cod_ve.'"/><br>
			<p> Nombre       :</p><input type="texto" name="nombre" value="'.$nom_ve.'"/> <br>
			<p> Apellido     :</p><input type="texto" name="apellido" value="'.$ape_ve.'"/> <br>
			<p> clave        :</p><input type="texto" name="clave" value="'.$clave.'"/> <br> <br>

			<input type="submit" name="enviar" value="Actualizar">
		</form>'; 
	}


?>
