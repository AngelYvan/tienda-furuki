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
$mediopago=$_POST['mediopago'];
$chef=$_POST['chef'];
$numItems=$_POST['numItems'];
$intItems=(int)$numItems;
$items;
ECHO"dni registrado :".$dni."<br>";
ECHO"nombre registrado :".$nombre."<br>";
ECHO"direccion registrado :".$direccion."<br>";
ECHO"distrito registrado :".$distrito."<br>";
ECHO"Telefono registrado :".$telefono."<br>";
ECHO"Medio de Pago :".$mediopago."<br>";
ECHO"Chef :".$chef."<br>";
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

$consulta2= 'SELECT * FROM producto';
$datos2 = mysqli_query($conexion, $consulta2);
while($row = mysqli_fetch_array($datos2)) {

}
$numBoletas=0;
$consultaNumBoletas= 'SELECT COUNT(*) FROM boleta';
$resultadoNumBoletas = mysqli_query($conexion, $consultaNumBoletas);
$numBoletas = mysqli_fetch_row($resultadoNumBoletas);
//echo $numBoletas[0];

$numProductos=0;
$consultaNumProductos= 'SELECT COUNT(*) FROM producto';
$resultadoNumProductos = mysqli_query($conexion, $consultaNumProductos);
$numProductos = mysqli_fetch_row($resultadoNumProductos);
//echo $numProductos[0];
$numProductos=(int)$numProductos[0];

$numProdComprados=count($items);
$arrProdComprados=array();
for($i=0;$i<$numProductos;$i++){
  array_push($arrProdComprados, 0);
}
//echo  count($arrProdComprados);
for($i=1;$i<=$numProdComprados;$i++){
  echo (int)($items[$i]);
  $arrProdComprados[(int)($items[$i]-1)]++;
}
/*$tamArrProdComprados=count($arrProdComprados);
for($i=0;$tamArrProdComprados;$i++){

}*/

echo '<a href="principal.php">Regresar</a>';
//header("location:../principal.html");

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