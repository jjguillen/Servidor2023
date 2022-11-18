<?php

    abstract class HomoSapiens implements Reproductor {

        protected $capacidadCraneal;
        protected $habla;

        public abstract function comunica();

        public function reproducirse() {
            echo "Viva la especie<br>";
        }

        public function pintar() {
            echo $this;
        }
    

    }




?>