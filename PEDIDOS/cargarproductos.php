
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
include("conexion.php");

$consulta= 'SELECT * FROM producto';
$result = mysqli_query($conexion, $consulta);


/*echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";*/
/*while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['cod_produc'] . "</td>";
  echo "<td>" . $row['nom_produc'] . "</td>";
  echo "<td>" . $row['precio'] . "</td>";
  echo "<td>" . $row['stock'] . "</td>";
  echo "<td>" . $row['img_product'] . "</td>";
  echo "</tr>";
}*/
echo "_";
$cont=1;
while($row = mysqli_fetch_array($result)) {
    /*echo '<div class="card col-sm-4">';
    echo '<div class="card body">';
    echo '<img class="img-fluid" src="'.$row['img_product'].'">';
    echo '<h5 class="card-title">'.$row['nom_produc'].'</h5>';
    echo '<p class="card-text">1€</p>';
    echo '<button id="btnproducto" class="btn btn-primary" marcador="'.$cont.'">+</button>';
    echo '</div>';
    echo '</div>';*/
    /*echo "<td>" . $row['cod_produc'] . "</td>";
    echo "<td>" . $row['nom_produc'] . "</td>";
    echo "<td>" . $row['precio'] . "</td>";
    echo "<td>" . $row['stock'] . "</td>";
    echo "<td>" . $row['img_product'] . "</td>";
    echo "</tr>";*/
    echo $cont;
    echo "-";
    echo $row['nom_produc'];
    echo "-";
    echo $row['precio'];
    echo "-";
    echo $row['img_product'];
    echo "_";
    $cont=$cont+1;
}
echo "_";
//echo "</table>";
mysqli_close($conexion);
?>
</body>
</html> 