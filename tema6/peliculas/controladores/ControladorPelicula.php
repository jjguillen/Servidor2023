<?php

    class ControladorPelicula {


        public static function mostrarPeliculas() {
            //LLamar al modelo para obtener todas las películas en un array de Pelicula
            $peliculas = PeliculaBD::getPeliculas();

            //Llamar a una vista para pintar esas películas
            VistaPeliculasMostrarTodas::render($peliculas);
        }

        public static function mostrarPelicula($id) {
            //LLamar al modelo para obtener el objeto de la pelicula con id $id
            $pelicula = PeliculaBD::getPelicula($id);

            //Llamar a la vista para pintar la película en detalle
            VistaPeliculaDetalle::render($pelicula);
        }


    }



?>