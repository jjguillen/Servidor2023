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

        public static function nuevaCritica($critica) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("INSERT INTO criticas (id_usuario, id_pelicula, nota, texto, fecha) 
                        VALUES (?, ?, ?, ?, ?) " );
            $stmt->bindValue(1,$critica->getId_usuario());
            $stmt->bindValue(2,$critica->getId_pelicula());
            $stmt->bindValue(3,$critica->getNota());
            $stmt->bindValue(4,$critica->getTexto());
            $stmt->bindValue(5,$critica->getFecha());

            //echo $stmt->debugDumpParams();
            $stmt->execute();

            ConexionBD::cerrar();
        }

    }

?>