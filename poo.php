<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
</head>
<body>


<?php


	class Coche{

		var $rueda;
		var $color;
		var $motor;

		function __construct(){//metodo constuctor

			$this -> ruedas=4;
			$this -> color="";
			$this -> motor=1600;

		}

		function arrancar(){

			echo "Estoy arrancando" . "</br>";

		}


		function girar(){

			echo "Estoy girando" . "</br>";

		}

		function frenar(){

			echo "Estoy frenando" . "</br>";

		}


	}

	$renault = new Coche(); //estado inicial al objeto o instancia
	$mazda = new Coche();
	$seat = new Coche();

	$mazda -> arrancar();
	$mazda -> girar();
	$mazda -> frenar();
	echo $mazda -> ruedas;



?>

</body>
</html>