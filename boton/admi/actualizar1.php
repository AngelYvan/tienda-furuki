<?php
	include("conexion.php");
	$cod=$_GET['cod'];
	
	mysqli_select_db($conexion, $BD);
	$consulta =  "SELECT * FROM `cliente` WHERE DNI_cliente='$cod'";
	$datos = mysqli_query($conexion, $consulta);
	
	while($fila = mysqli_fetch_array($datos)) { 
		$dni=$fila['DNI_cliente'] ;
		$nombre=$fila['nom_cliente'] ;
		$direccion=$fila['direc_cliente'] ;
		$distrito =$fila['distrito_cliente'];
		$telefono =$fila['telf_cliente'];
		
		
		echo '<form action="update1.php" method="POST"> 
			<input type="hidden" name="codigo" value="'.$dni.'"/><br>
			<p> Nombre       :</p><input type="texto" name="nombre" value="'.$nombre.'"/> <br>
			<p> Dirección    :</p><input type="texto" name="direccion" value="'.$direccion.'"/> <br>
			<p> Teléfono       :</p><input type="texto" name="telefono" value="'.$telefono.'"/> <br> <br>
            <p> Distrito     :</p><input type="texto" name="distrito" value="'.$distrito.'"/> <br> <br>
			<input type="submit" name="enviar" value="Actualizar">
		</form>'; 
	}


?>
