<?php

    require "Conexion.php";

    class devuelve_productos extends Conexion{

        public function __construct(){
            parent::__construct();
        }

        public function get_productos(){

            $resultado=$this->conexion_db->query('select * from productos');

            $productos=$resultado->fetch_all(MYSQLI_ASSOC);

            return $productos;
            
        }



    }

?>