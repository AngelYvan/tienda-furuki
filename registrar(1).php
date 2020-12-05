<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formatopropio.css">
  </head>
  <body>
<h1>SU PEDIDO EN KURO</h1>
<?php
   $NOM=$_REQUEST['nombre'];
   
   $FON=$_POST['telefono'];
   $PLA=$_POST['VARIABLE2'];
$CAN=$_POST['CANTIDAD'];
   
   $TOTAL=$N1+$N2+$N3+$N4+$N5;
   $PROME=$TOTAL/5;
   ECHO'<DIV ID="FONDO02">';
     ECHO"<p class='pl3'>";
       ECHO"La informacion se enviara al correo :".$COR."<br>";
       ECHO"su usuario es : $USU y la contraseña es : $KEY<br>";
       ECHO"Telefono registrado :".$FON."<br>";
     ECHO"</p>";
   ECHO"<p class='pl1'>EL NOMBRE ES:</p> <p class='pl2'>$NOM</p><br>";
   ECHO"Supedido es $PLA y la cantidad es $CAN";
   
   ECHO '</DIV>';
  ?>
     </body>
</html>