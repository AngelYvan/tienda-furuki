<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formatopropio.css">
  </head>
  <body>

<?php

 $NOM=$_REQUEST['nombrecli'];
   
   $FON=$_POST['telefono'];
   $PLA=$_POST['VARIABLE2'];
$CAN=$_POST['CANTIDAD'];
   
   $TOTAL=$N1+$N2+$N3+$N4+$N5;
   $PROME=$TOTAL/5;
   ECHO'<DIV ID="FONDO02">';
     ECHO"<p class='pl3'>";
       ECHO"Telefono registrado :".$FON."<br>";
     ECHO"</p>";
   ECHO"<p class='pl1'>EL NOMBRE ES:</p> <p class='pl2'>$NOM</p><br>";
   ECHO"Supedido es $PLA y la cantidad es $CAN";
   
   ECHO '</DIV>';
/*MANDANDO A DOCUMENTO*/
$FP=fopen("pedidos.txt","a");
fputs($FP,$NOM.PHP_EOL);
fputs($FP,$FON.PHP_EOL);
fputs($FP,$PLA.PHP_EOL);
fputs($FP,$CAN.PHP_EOL);
fputs($FP,"---------");
fputs($FP,PHP_EOL);
fclose($FP);
?>

      
       </body>
</html>