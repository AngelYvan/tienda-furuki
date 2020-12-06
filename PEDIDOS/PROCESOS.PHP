<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formatopropio.css">
  </head>
  <body>

<?php
include("conexion.php");

$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$distrito=$_POST['distrito'];
$telefono=$_POST['telefono'];
$numItems=$_POST['numItems'];
$intItems=(int)$numItems;
$items;
ECHO"dni registrado :".$dni."<br>";
ECHO"nombre registrado :".$nombre."<br>";
ECHO"direccion registrado :".$direccion."<br>";
ECHO"distrito registrado :".$distrito."<br>";
ECHO"Telefono registrado :".$telefono."<br>";
ECHO"numitems registrado :".$numItems."<br>";
for($i = 0; $i < $intItems; $i=$i+1){
  $iMas=$i+1;
  //Datos Item
  $items[$iMas]=$_POST['item'.$iMas];
  ECHO"item :".$items[$iMas]."<br>";
}
//INSERT INTO cliente (DNI_cliente, nom_cliente, direc_cliente, distrito_cliente, telf_cliente) VALUES (44557788, 'Jaime', 'Avenida UHN 345', 'Cayma', 946946946);
$consulta= 'INSERT INTO  cliente (DNI_cliente, nom_cliente, direc_cliente, distrito_cliente, telf_cliente) VALUES ('.$dni.',"'.$nombre.'","'.$direccion.'","'.$distrito.'",'.$telefono.')';
$datos = mysqli_query($conexion, $consulta);


header("location:../principal.html");

/* $NOM=$_REQUEST['nombrecli'];
   
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
   
   ECHO '</DIV>';*/
/*MANDANDO A DOCUMENTO*/
/*$FP=fopen("pedidos.txt","a");
fputs($FP,$NOM.PHP_EOL);
fputs($FP,$FON.PHP_EOL);
fputs($FP,$PLA.PHP_EOL);
fputs($FP,$CAN.PHP_EOL);
fputs($FP,"---------");
fputs($FP,PHP_EOL);
fclose($FP);*/
?>

      
  </body>
</html>