<?php
	include("conexion.php");
	$cod=$_GET['cod'];
	
	mysqli_select_db($conexion, $BD);
	$consulta = "SELECT * FROM `cliente` WHERE DNI_cliente='$cod'";
	$datos = mysqli_query($conexion, $consulta);
	
	while($fila = mysqli_fetch_array($datos)) { 
		$DNI=$fila['DNI_cliente'];
		$nom= $fila['nom_cliente'];
		$direc= $fila['direc_cliente'];
		$telf =$fila['telf_cliente'];
		$dir =$fila['distrito_cliente'];
		
		
		echo '<form action="update1.php" method="POST"> 
			<input type="hidden" name="codigo" value="'.$DNI.'"/><br>
			<p> Nombre       :</p><input type="texto" name="nombre" value="'.$nom.'"/> <br>
			<p> Dirección    :</p><input type="texto" name="direccion" value="'.$direc.'"/> <br>
			<p> Teléfono       :</p><input type="texto" name="telefono" value="'.$telf.'"/> <br> <br>
            <p> Distrito     :</p><input type="texto" name="distrito" value="'.$dir.'"/> <br> <br>
			<input type="submit" name="enviar" value="Actualizar">
		</form>'; 
	}


?>
