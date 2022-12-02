<?php

    class Prestamo {

        private $idPrestamo;
        private $idLibro;
        private $idUsuario;
        private $fechaInicio;
        private $fechaFin;
        private $estado;


        public function __construct($idLibro="", $idUsuario="", $fechaInicio="",$fechaFin="",$estado="") {
           
            $this->idLibro = $idLibro;
            $this->idUsuario = $idUsuario;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFin = $fechaFin;
            $this->estado = $estado;
        }
       

        /**
         * Get the value of idLibro
         */ 
        public function getIdLibro()
        {
                return $this->idLibro;
        }

        /**
         * Set the value of idLibro
         *
         * @return  self
         */ 
        public function setIdLibro($idLibro)
        {
                $this->idLibro = $idLibro;

                return $this;
        }

        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         * @return  self
         */ 
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }

        /**
         * Get the value of fechaInicio
         */ 
        public function getFechaInicio()
        {
                return $this->fechaInicio;
        }

        /**
         * Set the value of fechaInicio
         *
         * @return  self
         */ 
        public function setFechaInicio($fechaInicio)
        {
                $this->fechaInicio = $fechaInicio;

                return $this;
        }

        /**
         * Get the value of fechaFin
         */ 
        public function getFechaFin()
        {
                return $this->fechaFin;
        }

        /**
         * Set the value of fechaFin
         *
         * @return  self
         */ 
        public function setFechaFin($fechaFin)
        {
                $this->fechaFin = $fechaFin;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }


        /**
         * Get the value of idPrestamo
         */ 
        public function getIdPrestamo()
        {
                return $this->idPrestamo;
        }

        /**
         * Set the value of idPrestamo
         *
         * @return  self
         */ 
        public function setIdPrestamo($idPrestamo)
        {
                $this->idPrestamo = $idPrestamo;

                return $this;
        }
    }
?>