<?php

    class CriticaBD {

        public static function getCriticas($idPelicula) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT criticas.id, criticas.id_usuario, criticas.id_pelicula, criticas.nota, criticas.texto, criticas.fecha, usuarios.nick FROM criticas join usuarios WHERE criticas.id_pelicula = ? and criticas.id_usuario = usuarios.id");
            $stmt->bindValue(1, $idPelicula);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Critica');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $pelicula = $stmt->fetchAll();

            ConexionBD::cerrar();

            return $pelicula;
        }



    }

?>