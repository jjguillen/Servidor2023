<?php

    class Coche {

        private $id;
        private $marca;
        private $modelo;
        private $matricula;

        function __construct($marca="", $modelo="", $matricula="") {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->matricula = $matricula;
        }

        function getId() {
            return $this->id;
        }

        function getMarca() {
            return $this->marca;
        }

        function getModelo() {
            return $this->modelo;
        }

        function getMatricula() {
            return $this->matricula;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        function setMarca($marca) {
            $this->marca = $marca;
        }

        function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

        function pintar() {
            echo "<p>".$this->id." - ".$this->marca." - ".$this->modelo." - ".$this->matricula."</p>";
        }

    }



?>