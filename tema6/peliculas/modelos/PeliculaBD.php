<?php

    class PeliculaBD {

        public static function getPeliculas() {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM peliculas");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $peliculas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Pelicula');

            ConexionBD::cerrar();

            return $peliculas;
        }

        public static function getPelicula($id) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM peliculas WHERE id = ?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Pelicula');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $pelicula = $stmt->fetch();

            ConexionBD::cerrar();

            return $pelicula;
        }

        
        public static function insertarPelicula($pelicula) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("INSERT INTO peliculas (titulo, sinopsis, cartel, notaImdb, director, year) 
                        VALUES (?, ?, ?, ?, ?, ?) " );
            $stmt->bindValue(1,$pelicula->getTitulo());
            $stmt->bindValue(2,$pelicula->getSinopsis());
            $stmt->bindValue(3,$pelicula->getCartel());
            $stmt->bindValue(4,$pelicula->getNotaImdb());
            $stmt->bindValue(5,$pelicula->getDirector());
            $stmt->bindValue(6,$pelicula->getYear());

            //echo $stmt->debugDumpParams();
            $stmt->execute();

            ConexionBD::cerrar();
        }


    }