<?php

    class Libro {

        private $idLibro;
        private $isbn;
        private $titulo;
        private $descripcion;
        private $autor;
        private $editorial;
        private $categoria;
   
        public function __construct($isbn="", $titulo="", $descripcion="", $autor="", $editorial="", $categoria="") {
        
            $this->isbn = $isbn;
            $this->titulo = $titulo;
            $this->descripcion = $descripcion;
            $this->autor = $autor;
            $this->editorial = $editorial;
            $this->categoria = $categoria;

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
         * Get the value of isbn
         */ 
        public function getIsbn()
        {
                return $this->isbn;
        }

        /**
         * Set the value of isbn
         *
         * @return  self
         */ 
        public function setIsbn($isbn)
        {
                $this->isbn = $isbn;

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
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of autor
         */ 
        public function getAutor()
        {
                return $this->autor;
        }

        /**
         * Set the value of autor
         *
         * @return  self
         */ 
        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

        /**
         * Get the value of editorial
         */ 
        public function getEditorial()
        {
                return $this->editorial;
        }

        /**
         * Set the value of editorial
         *
         * @return  self
         */ 
        public function setEditorial($editorial)
        {
                $this->editorial = $editorial;

                return $this;
        }

        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */ 
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;

                return $this;
        }
    }
?>