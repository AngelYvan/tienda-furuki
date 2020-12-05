<?php
//session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="CSS/Menu.css">
  <!-- Bootstrap CSS JS - DISEÑO RESPONSIVE -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="./img/5.jpeg" type="image/x-icon">
</head>

<body>

  <div class="topnav" id="myTopnav">
    <!-- 
  <a href="#home" class="active">Home</a> -->
    <a href="principal.html">PAGINA PRINCIPAL</a>
    <a href="comentario/3.html">COMENTARIOS</a>
    <a href="PEDIDOS/uno.html">PEDIDOS EN LINEA</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="container formulario">
    <div class="card col-lg-8 col-12">
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Ingrese su usuario: </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre de Usuario">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Ingresa su contraseña: </label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
          </div>
          <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
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