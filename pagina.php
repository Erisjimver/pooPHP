<?php

    require "conexion.php";

    $productos = new devuelve_productos();

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

    foreach($array_productos as $elemento){

		echo "Registro guardado";
		echo "<table><tr><td>" .  $elemento['códigoartículo'] . "</td></tr>";
        echo "<table><tr><td>" . $elemento['seccion'] . "</td></tr>";
        echo "<table><tr><td>" . $elemento['nombreartículo'] . "</td></tr>";
        echo "<table><tr><td>" . $elemento['precio'] . "</td></tr>";
        echo "<table><tr><td>" . $elemento['fecha'] . "</td></tr>";
        echo "<table><tr><td>" . $elemento['importado'] . "</td></tr>";
        echo "<table><tr><td>" . $elemento['paísdeorigen'] . "</td></tr>";

		echo "<table><tr><td>$por</td></tr></table>";

    }


?>
</body>
</html>