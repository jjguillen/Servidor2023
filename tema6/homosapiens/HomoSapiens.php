<?php
    include_once "Reproductor.php";

    abstract class HomoSapiens implements Reproductor {

        protected $capacidadCraneal;
        protected $habla;

        public abstract function comunica();

        public function reproducirse() {
            echo "Viva la especie<br>";
        }

    }




?>