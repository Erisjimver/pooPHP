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

		function Coche(){//metodo constuctor

			$this -> ruedas=4;
			$this -> color="";
			$this -> motor=1600

		}

		function arrancar(){


		}


		function girar(){


		}

		function frenar(){


		}


	}

	$renault = new Coche();
	$mazda = new Coche();
	$seat = new Coche();





?>

</body>
</html>