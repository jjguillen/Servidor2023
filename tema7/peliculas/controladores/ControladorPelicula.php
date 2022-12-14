<?php

    class ControladorPelicula {

        /**
         * Mostrar todas las películas
         */
        public static function mostrarPeliculas($codigo) {
            //LLamar al modelo para obtener todas las películas en un array de Pelicula
            $peliculas = PeliculaBD::getPeliculas();

            //Llamar a una vista para pintar esas películas
            VistaPeliculasMostrarTodas::render($peliculas,$codigo);
        }

        /**
         * Mostrar detalle película por id
         */
        public static function mostrarPelicula($id) {
            //LLamar al modelo para obtener el objeto de la pelicula con id $id
            $pelicula = PeliculaBD::getPelicula($id);
            $criticas = CriticaBD::getCriticas($id);

            //Llamar a la vista para pintar la película en detalle
            VistaPeliculaDetalle::render($pelicula, $criticas);
        }

        /**
         * Insertar una película en BDº
         */
        public static function insertarPelicula($pelicula) {
            PeliculaBD::insertarPelicula($pelicula);
            echo "<script>window.location='enrutador.php?accion=inicio'</script>";
            
        }



    }



?>