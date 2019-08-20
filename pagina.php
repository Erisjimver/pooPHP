<?php

    require "devuelve_productos.php";
    //$filepath = realpath (dirname(__FILE__));

   // require_once($filepath."/devuelve_productos.php");

    $productos = new Devuelve_Productos();

    $array_productos=$productos->get_productos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

echo "<table border=1>";
echo "<caption>productos</caption>";
echo 	"<tr>";
echo 		"<th>Codigo: </th>";
echo 		"<th>Seccion</th>";
echo 		"<th>Nombre</th>";
echo 		"<th>Precio</th>";
echo 		"<th>Fecha</th>";
echo 		"<th>Importado</th>";
echo 		"<th>pais de origen</th>";

echo 	"</tr>";
 
    foreach($array_productos as $elemento){
        
     
        echo 	"<tr>";

		echo "<td>" .  $elemento['códigoartículo'] . "</<td>";
        //echo "<td>" . $elemento['sección'] . "</<td>";
        //echo "<td>" . $elemento['nombreartículo'] . "<td>";
        //echo "<td>" . $elemento['precio'] . "</<td>";
        //echo "<td>" . $elemento['fecha'] . "</<td>";
        //echo "<td>" . $elemento['importado'] . "</<td>";
        //echo "<td>" . $elemento['paísdeorigen'] . "</td>";

        echo 	"</tr>";

    }
//    echo "</table>";

?>
</body>
</html>