<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="formatopropio.css">
  </head>
  <body>


<div id="FONDO02">
<?php


ECHO "<H2>PEDIDOS HECHOS</H2>";

$COD=$_POST['CODIGO'];
IF ($COD<>"PEPITA"){
    
    ECHO "TIENES PERMISO DE ENTRADA";
    include('PRINCIPAL.HTML');
    exit;
}







/*RECUPERANDO DATOS DESDE EL ARCHIVO TXT*/
ECHO ">>>>>>>>>  LEYENDO ARCHIVO DE PEDIDOS   <<<<<<<br/>";

$FP=fopen("pedidos.txt","r");

WHILE(!FEOF($FP)){
$LINEA=fgets($FP);
ECHO ">> ".$LINEA."<BR>";
}

ECHO ">>>>>>>>>     FIN DE ARCHIVO DE PEDIDOS   <<<<<<<<<<";

fclose($FP);


?>
    </div>
      
         
       </body>
</html>