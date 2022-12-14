<?php

    class Pelicula {

        private $id;
        private $titulo;
        private $sinopsis;
        private $cartel;
        private $notaImdb;
        private $director;
        private $year;

      
        public function __construct($titulo="",$sinopsis="",$cartel="",$notaImdb="",$director="",$year="") {
            $this->titulo = $titulo;
            $this->sinopsis = $sinopsis;
            $this->cartel = $cartel;
            $this->notaImdb = $notaImdb;
            $this->director = $director;
            $this->year = $year;
        }


        /**
         * Get the value of year
         */ 
        public function getYear()
        {
                return $this->year;
        }

        /**
         * Set the value of year
         *
         * @return  self
         */ 
        public function setYear($year)
        {
                $this->year = $year;

                return $this;
        }

        /**
         * Get the value of director
         */ 
        public function getDirector()
        {
                return $this->director;
        }

        /**
         * Set the value of director
         *
         * @return  self
         */ 
        public function setDirector($director)
        {
                $this->director = $director;

                return $this;
        }

        /**
         * Get the value of notaImdb
         */ 
        public function getNotaImdb()
        {
                return $this->notaImdb;
        }

        /**
         * Set the value of notaImdb
         *
         * @return  self
         */ 
        public function setNotaImdb($notaImdb)
        {
                $this->notaImdb = $notaImdb;

                return $this;
        }

        /**
         * Get the value of cartel
         */ 
        public function getCartel()
        {
                return $this->cartel;
        }

        /**
         * Set the value of cartel
         *
         * @return  self
         */ 
        public function setCartel($cartel)
        {
                $this->cartel = $cartel;

                return $this;
        }

        /**
         * Get the value of sinopsis
         */ 
        public function getSinopsis()
        {
                return $this->sinopsis;
        }

        /**
         * Set the value of sinopsis
         *
         * @return  self
         */ 
        public function setSinopsis($sinopsis)
        {
                $this->sinopsis = $sinopsis;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
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

}







?>