<?php
    include_once "HomoSapiens.php";

    class Neandertal extends HomoSapiens {

        public function __construct() {
 
            $this->capacidadCraneal = 1400;
            $this->habla = false;
        }

        public function comunica() {
            echo "Puede hablar: ".$this->habla;
        }


    }

/*
    $pepe = new Neandertal();
    $pepe->comunica();
*/
?>