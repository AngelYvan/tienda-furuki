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

echo "DNI Chef : ".$dniChef."<br>";
echo "Nombre : ".$nombreChef;
echo " ". $apellidoChef;

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
$import_bolet=0;
$IGV_bolet=0;
$import_total_bolet=0;


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
  $import_bolet=$import_bolet+((int)$productos[$i][2]*(int)$productos[$i][3]);
}
echo "</table>";
$IGV_bolet=(int)($import_bolet*0.18);
$import_total_bolet=$import_bolet+$IGV_bolet;
echo "Importe de Boleta = ".$import_bolet."<br>";
echo "IGV de boleta = ".$IGV_bolet."<br>";
echo "Importe TOTAL = ".$import_total_bolet."<br>";



//guardar boleta
echo "Numero de boleta=".((int)$numBoletas[0]+1)."<br>";
/*$consultaBoleta= 'INSERT INTO  boleta (num_bolet, fech_bolet, medpago, DNI_cliente, import_bolet, IGV_bolet, import_total_bolet, dni_chef) 
VALUES ('.((int)$numBoletas+1).',"'.date("Y").date("m").date("d").'","'.$mediopago.'",'.(int)$dni.','.0.','.0.','.0.','.$dniChef.')';*/
/*$consultaBoleta= 'INSERT INTO  boleta (num_bolet, fech_bolet, medpago, DNI_cliente, dni_chef) 
VALUES ('.((int)$numBoletas[0]+1).',"'.date("Y").date("m").date("d").'","'.$mediopago.'",'.(int)$dni.','.$dniChef.')';*/
$consultaBoleta= 'INSERT INTO  boleta (num_bolet, fech_bolet, medpago, DNI_cliente, import_bolet, IGV_bolet, import_total_bolet, dni_chef) 
VALUES ('.((int)$numBoletas[0]+1).',"'.date("Y").date("m").date("d").'","'.$mediopago.'",'.(int)$dni.','.$import_bolet.','.$IGV_bolet.','.$import_total_bolet.','.$dniChef.')';
$datosBoleta = mysqli_query($conexion, $consultaBoleta);
//$consultaBoleta= 'INSERT INTO  boleta (`num_bolet`, `fech_bolet`, `medpago`, `DNI_cliente`, `import_bolet`, `IGV_bolet`, `import_total_bolet`, `dni_chef`) VALUES (19, "2020-11-18", "Efectivo", 78092145, "26", "5", "31", 18361425)';
//$datosBoleta = mysqli_query($conexion, $consultaBoleta);
if (!$datosBoleta) {
  die('Consulta no válida: ' . mysqli_error($conexion));
}


//guardar detalle de boleta
for($i=0;$i<count($productos);$i++){
  $consultaProducto= 'INSERT INTO  `detalle boleta` (num_bolet, cod_produc, cant_produc) VALUES ('.((int)$numBoletas[0]+1).',"'.$productos[$i][0].'",'.$productos[$i][3].')';
  $datosProducto = mysqli_query($conexion, $consultaProducto);
  if (!$datosProducto) {
    die('Consulta no válida: ' . mysqli_error($conexion));
  }
}

echo '<a href="principal.php">Regresar</a>';

      
?>
  </body>
</html>