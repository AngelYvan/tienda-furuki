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

echo "<style>";
echo "table {";
  echo "  width: 100%;";
  echo "  border-collapse: collapse;";
  echo "}";

  echo "table, td, th {";
    echo "border: 1px solid black;";
    echo "padding: 5px;";
    echo "}";
    echo "th {text-align: left;}";
    echo "</style>";

ECHO"dni registrado :".$dni."<br>";
ECHO"nombre registrado :".$nombre."<br>";
ECHO"direccion registrado :".$direccion."<br>";
ECHO"distrito registrado :".$distrito."<br>";
ECHO"Telefono registrado :".$telefono."<br>";
ECHO"Medio de Pago :".$mediopago."<br>";
ECHO"Chef :".$chef."<br>";
//ECHO"numitems registrado :".$numItems."<br>";
for($i = 0; $i < $intItems; $i=$i+1){
  $iMas=$i+1;
  //Datos Item
  $items[$iMas]=$_POST['item'.$iMas];
  //ECHO"item :".$items[$iMas]."<br>";
}
//INSERT INTO cliente (DNI_cliente, nom_cliente, direc_cliente, distrito_cliente, telf_cliente) VALUES (44557788, 'Jaime', 'Avenida UHN 345', 'Cayma', 946946946);
$consulta= 'INSERT INTO  cliente (DNI_cliente, nom_cliente, direc_cliente, distrito_cliente, telf_cliente) VALUES ('.$dni.',"'.$nombre.'","'.$direccion.'","'.$distrito.'",'.$telefono.')';
$datos = mysqli_query($conexion, $consulta);

$dniChef;
$nombreChef;
$apellidoChef;

$temp=1;
$consultaChef= 'SELECT * FROM chefs';
$datosChef = mysqli_query($conexion, $consultaChef);
while($row = mysqli_fetch_array($datosChef)) {
  if($chef==$temp){
    $dniChef=$row['dni_chef'];
    $nombreChef=$row['nombre_chef'];
    $apellidoChef=$row['apellido_chef'];
  }
  $temp++;
}

/*echo $dniChef;
echo $nombreChef;
echo $apellidoChef;*/

$numBoletas=0;
$consultaNumBoletas= 'SELECT COUNT(*) FROM boleta';
$resultadoNumBoletas = mysqli_query($conexion, $consultaNumBoletas);
$numBoletas = mysqli_fetch_row($resultadoNumBoletas);
//echo $numBoletas[0];

//Obtiene el total de productos
$numProductos=0;
$consultaNumProductos= 'SELECT COUNT(*) FROM producto';
$resultadoNumProductos = mysqli_query($conexion, $consultaNumProductos);
$numProductos = mysqli_fetch_row($resultadoNumProductos);
$numProductos=(int)$numProductos[0];
//echo $numProductos[0];

//Obtiene la cantidad de productos Comprados
$numProdComprados=count($items);
//echo "Número de productos=".$numProductos."<br>";

//Crea un arreglo vacío
$arrProdComprados=array();
for($i=0;$i<$numProductos;$i++){
  array_push($arrProdComprados, 0);
}

//Llena el arreglo con los productos comprados
//echo  count($arrProdComprados);
for($i=1;$i<=$numProdComprados;$i++){
  //echo (int)($items[$i])."<br>";
  $arrProdComprados[(int)($items[$i]-1)]++;
  //echo $arrProdComprados[(int)($items[$i]-1)]."<br>";
}
/*echo "<br>";
for($i=0;$i<$numProductos;$i++){
  echo $arrProdComprados[$i].",";
}
echo "<br>";
echo "<br>";*/
$temp=0;
$pos=0;
$productos=array();
$consultaProdComprados= 'SELECT * FROM producto';
$datosProdComprados = mysqli_query($conexion, $consultaProdComprados);
while($row = mysqli_fetch_array($datosProdComprados)) {
  
  /*for($i=$pos;$i<$numProductos;$i++){
    //echo $arrProdComprados[$i]."<br>";
    if($temp==$i && $arrProdComprados[$i]>0){
      echo $arrProdComprados[$i]."<br>";
      $productos[$pos][0]=$row['cod_produc'];
      $productos[$pos][1]=$row['nom_produc'];
      $productos[$pos][2]=$row['precio'];
      $productos[$pos][3]=$arrProdComprados[$i];
      $pos=$i;
    }
  }*/
  if($arrProdComprados[$temp]>0){
    //echo $arrProdComprados[$i]."<br>";
    $productos[$pos][0]=$row['cod_produc'];
    $productos[$pos][1]=$row['nom_produc'];
    $productos[$pos][2]=$row['precio'];
    $productos[$pos][3]=$arrProdComprados[$temp];
    $pos++;
  }
  $temp++;
}

//echo count($productos)."<br>";
echo "<table>
<tr>
<th>Codigo producto</th>
<th>Nombre producto</th>
<th>Precio</th>
<th>Cantidad</th>
</tr>";

for($i=0;$i<count($productos);$i++){
  echo "<tr>";
  echo "<td>" . $productos[$i][0] . "</td>";
  echo "<td>" . $productos[$i][1] . "</td>";
  echo "<td>" . $productos[$i][2] . "</td>";
  echo "<td>" . $productos[$i][3] . "</td>";
  echo "</tr>";
}
echo "</table>";
//echo count($productos)."<br>";







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