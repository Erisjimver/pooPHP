<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
</head>
<body>


<?php

	include("vehiculo.php");

	$mazda = new Coche(); //estado inicial al objeto o instancia

	$pegaso = new Camion();

	//$mazda -> arrancar();
	//$mazda -> girar();
	//$mazda -> frenar();
	//echo $mazda -> ruedas;
	//$renault -> establece_color("rojo","Renault");
	//$seat -> establece_color("azul","seat");

	echo "El Mazda tiene " . $mazda-> ruedas . " ruedas <br>";

	echo "El Pegaso tiene " . $pegaso-> ruedas . " ruedas <br>";




?>


</body>
</html>