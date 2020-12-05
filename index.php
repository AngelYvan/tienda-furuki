<?php
	//session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <link href="css/ayudante.css" rel="stylesheet">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SESIONES</title>
    
  </head>
  <body>

<!-- Navegación-->
<div class="title-bar" data-responsive-toggle="realEstateMenu" data-hide-for="small">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title"></div>
</div>

<div id="menu" >
	<strong>
	<ul>
	
	 <li class="f"><a href="principal.html">PAGINA PRINCIPAL</a></li>
	 <li class="e"><a href="comentario/3.html" >COMENTARIOS</a></li>
	 <li class="f"><a href="PEDIDOS/uno.html">PEDIDOS EN LINEA</a></li>
	</ul>

	</strong>
</div>
<!-- /Navegacion -->

<br>

<div class="row">


  <div class="medium-5 large-3 columns">
    <div class="callout secondary">
      <form action="validarsesion.php" method="POST">
        <div class="row">
          <div class="small-12 columns">
            <label>Ingrese su usuario
              <input type="text" placeholder="Ingrese Usuario" name="usuario">
            </label>
          </div>
          <div class="small-12 columns">
            <label>Ingrese su contraseña
              <input type="number" placeholder="1234" name="clave">
            </label>
            <center><button type="submit" class="button">Ingresar</button>
			<!-- <button type="submit" class="button">Cerrar </button></center> -->
		   </div>
        </div> 
      </form>
    </div>
  </div>

</div>


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
