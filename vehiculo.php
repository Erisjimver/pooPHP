
<?php

//-----------COCHE----------------------------------//
	class Coche{

		private $rueda;
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

		function establece_color($color_coche, $nombre_coche){

			$this -> color = $color_coche;

			echo "El color de $nombre_coche es : " . $this -> color . "</br>";
			
		}


	}

	
//-----------CAMION----------------------------------//


	class Camion extends Coche{

		var $rueda;
		var $color;
		var $motor;

		function __construct(){//metodo constuctor

			$this -> ruedas=8;
			$this -> color="gris";
			$this -> motor=2600;

		}



		function establece_color($color_camion, $nombre_camion){

			$this -> color = $color_camion;

			echo "El color de $nombre_camion es: " . $this -> color . "</br>";
			
		}

		function arrancar(){

			parent::arrancar();

			echo "Camion arrancado <br>";

		}


	}

?>