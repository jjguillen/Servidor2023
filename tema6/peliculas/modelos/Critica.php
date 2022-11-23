<?php

    class Critica {
        private $id;
        private $id_usuario;
        private $id_pelicula;
        private $nota;
        private $texto;
        private $fecha;


        public function __construct($id_usuario="", $id_pelicula="",$nota="",$texto="",$fecha="")
        {
            $this->id_usuario = $id_usuario;
            $this->id_pelicula = $id_pelicula;
            $this->nota = $nota;
            $this->texto = $texto;
            $this->fecha = $fecha;
        }



        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of id_usuario
         */ 
        public function getId_usuario()
        {
                return $this->id_usuario;
        }

        /**
         * Set the value of id_usuario
         *
         * @return  self
         */ 
        public function setId_usuario($id_usuario)
        {
                $this->id_usuario = $id_usuario;

                return $this;
        }

        /**
         * Get the value of id_pelicula
         */ 
        public function getId_pelicula()
        {
                return $this->id_pelicula;
        }

        /**
         * Set the value of id_pelicula
         *
         * @return  self
         */ 
        public function setId_pelicula($id_pelicula)
        {
                $this->id_pelicula = $id_pelicula;

                return $this;
        }

        /**
         * Get the value of nota
         */ 
        public function getNota()
        {
                return $this->nota;
        }

        /**
         * Set the value of nota
         *
         * @return  self
         */ 
        public function setNota($nota)
        {
                $this->nota = $nota;

                return $this;
        }

        /**
         * Get the value of texto
         */ 
        public function getTexto()
        {
                return $this->texto;
        }

        /**
         * Set the value of texto
         *
         * @return  self
         */ 
        public function setTexto($texto)
        {
                $this->texto = $texto;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }
    }


?>