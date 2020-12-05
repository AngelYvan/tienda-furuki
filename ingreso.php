<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SEMANA 14</title>

  <link rel="stylesheet" href="css/BienvenidoChef.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>

<body>
  <div class="topnav" id="myTopnav">
    <!-- 
  <a href="#home" class="active">Home</a> -->
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
  <div class="row">
    <div class="jumbotron">
      <h1 class="display-4">Bienvenido Chef!</h1>
      <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quos velit iure ex, necessitatibus officiis!</p>
      <hr class="my-4">
      
    </div>
  </div>
  <br>

  <div class="row column">
    <center>
      <p class="lead">PRODUCTOS</p>
    </center>
  </div>

  <div class="row small-up-1 medium-up-2 large-up-3">
    <div class="column">
      <div class="callout">
        <p>preparación</p>
        <p><img src="makis/6.jpg" alt="image of a planet called Pegasi B"></p>
        <p class="lead" align="center">MAKI CALIFORNIA</p>
        <p class="subheader" align="justify">Herviremos el arroz hasta dejarlo con la textura adecuada. (cómo
          hacer sushi)
          Cortar el pepino en tiras finas, de un centímetro y medio.
          Pelar el aguacateguate y cortarlo en virutas.
          Colocar papel film sobre el que extenderemos una capa de arroz y sobre él, las láminas de nori.
          Extenderemos el aguacate, el pepino y los palitos de cangrejo sobre el centro de la la lámina de
          nori.
          Enrollaremos el arroz, el alga y la mezcla usando el papel film.
          Espolvorearemos las piezas de sushi con sésamo y las coronaremos con tobiko.<BR><BR></p>
      </div>
    </div>
    <div class="column">
      <div class="callout">
        <p>preparación</p>
        <p><img src="picantes/23.jpg" alt="image of a planet called Pegasi B"></p>
        <p class="lead" align="center">MAKI ANTICUCHERO</p>
        <p class="subheader" align="justify">Sobre un 'makisu' (esterilla de 'sushi'), colocar media alga
          nori y cubrirla con arroz y girarla. Por la parte del alga,
          colocar el queso crema, el aguacate y los langostinos.
          Girar el 'makisu' hasta hacer un rollo evitando con los dedos que no se salga el relleno por los
          lados.
          Una vez cerrado, cortar en láminas el pez mantequilla y cubrir el rollo con ellas.
          Presionar el pez mantequilla sobre el 'makisu'.
          Cortar el 'maki' en 8 trozos de forma rápida y uniforme.
          Con una brocha, pintar el 'maki' con la salsa anticuchera.<BR><BR><BR></p>
      </div>
    </div>
    <div class="column">
      <div class="callout">
        <p>preparación</p>
        <p><img src="makis/2.jpg" alt="image of a planet called Pegasi B"></p>
        <p class="lead" align="center">MAKI FURAI</p>
        <p class="subheader" align="justify">En una batea echar el arroz. Agregar el vinagre hervido con azúcar,
          sal y sazonar. Deja enfriar.Extender un sudare (esterilla de bambú),
          previamente forrado en papel film. Colocar encima media hoja de algas
          Nori. Poner una bola de arroz y estirarla al tamaño de la hoja de alga.
          Voltear para que el alga quede arriba y el arroz abajo.Untar con un poco
          de wasabí.Rellenar con langostinos, palta y bastones de queso.Enrollar
          con sudare. Ajustar bien. Cortar en dos. Pasar por harina, huevo batido
          y pan-ko. Freír rápidamente en abundante aceite caliente.Cortar en rodajas
          y servir.</p>
      </div>
    </div>

  </div>
  
  </div>



  <footer>


  </footer>
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