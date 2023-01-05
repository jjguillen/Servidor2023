<?php

    class PartidaBD {


        public static function getPartidas() {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas WHERE fecha >= CURDATE() ORDER BY fecha ASC");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');

            //Para cada partida meter sus jugadores
            foreach($partidas as $partida) {
                 //Sacamos los jugadores de la partida
                $stmt = $conexion->prepare("SELECT jugadores.email, jugadores.password, jugadores.nombre, jugadores.apodo,
                jugadores.nivel, jugadores.edad FROM partida_jugador JOIN jugadores JOIN partidas WHERE 
                partida_jugador.idPartida = ? AND partida_jugador.idPartida = partidas.id AND partida_jugador.idJugador = jugadores.id");
                $stmt->bindValue(1, $partida->getId());
                $stmt->execute();

                $jugadores = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Jugador');
                //Importante
                $partida->setJugadores($jugadores);
            }

            ConexionBD::cerrar();

            return $partidas;
        }

        public static function getPartida($id) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas WHERE id = ?");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
            $partida = $stmt->fetch();

            //Sacamos los jugadores de la partida
            $stmt = $conexion->prepare("SELECT jugadores.email, jugadores.password, jugadores.nombre, jugadores.apodo,
                    jugadores.nivel, jugadores.edad FROM partida_jugador JOIN jugadores JOIN partidas WHERE 
                    partida_jugador.idPartida = ? AND partida_jugador.idPartida = partidas.id AND partida_jugador.idJugador = jugadores.id");
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $jugadores = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Jugador');
            $partida->setJugadores($jugadores);

            ConexionBD::cerrar();

            return $partida;
        }


        public static function borrarPartida($id) {
            $conexion = ConexionBD::conectar();

            //Solo se puede borrar si el jugador está en la partida.
            $jugador = unserialize($_SESSION['usuario']);
            $stmt = $conexion->prepare("SELECT idJugador FROM partida_jugador WHERE idPartida = ? AND idJugador = ?");
            $stmt->bindValue(1, $id);
            $stmt->bindValue(2, $jugador->getId());
            $stmt->execute();
            $count = $stmt->rowCount();

            //Si estoy en la partida se puede borrar
            if ($count > 0) {
                $stmt = $conexion->prepare("DELETE FROM partidas WHERE id = :id");
                // Bind
                $stmt->bindValue(":id", $id);
                // Ejecuta la consulta
                $stmt->execute();
            } else {
                echo "<script>alert('No es tu partida');</script>";
            }

            ConexionBD::cerrar();
        }

        public static function insertPartida($partida) {
            $conexion = ConexionBD::conectar();

            try {
                //Insertar
                $stmt = $conexion->prepare("INSERT INTO partidas (fecha, hora, ciudad, lugar, cubierto, estado ) VALUES (?, ?, ?, ?, ?, ?)");
                // Bind
                $stmt->bindValue(1, $partida->getFecha());
                $stmt->bindValue(2, $partida->getHora());
                $stmt->bindValue(3, $partida->getCiudad());
                $stmt->bindValue(4, $partida->getLugar());
                $stmt->bindValue(5, $partida->getCubierto());
                $stmt->bindValue(6, $partida->getEstado());
                // Ejecuta la consulta
                $stmt->execute();

                //Meto el jugador de la sesión en la partida
                $stmt = $conexion->prepare("INSERT INTO partida_jugador (idPartida, idJugador ) VALUES (?, ?)");
                $stmt->bindValue(1, $conexion->lastInsertId());
                $stmt->bindValue(2, unserialize($_SESSION['usuario'])->getId());
                $stmt->execute();

            } catch (PDOException $e){
                echo $e->getMessage();
            }

            ConexionBD::cerrar();
        }

        public static function inscribirJugador($idPartida, $idJugador) {
           
            $conexion = ConexionBD::conectar();

            try {
                //Nos inscribimos en caso de que no estemos ya inscritos.
                $stmt = $conexion->prepare("SELECT idJugador FROM partida_jugador WHERE idPartida = ? AND idJugador = ?");
                $stmt->bindValue(1, $idPartida);
                $stmt->bindValue(2, $idJugador);
                $stmt->execute();
                $count = $stmt->rowCount();

                if ($count == 0) {
                    $stmt = $conexion->prepare("INSERT INTO partida_jugador (idPartida, idJugador ) VALUES (?, ?)");
                    $stmt->bindValue(1, $idPartida);
                    $stmt->bindValue(2, $idJugador);
                    $stmt->execute();

                    //Si hay cuatro inscritos cerramos la partida
                    $stmt = $conexion->prepare("SELECT * FROM partida_jugador WHERE idPartida = ?");
                    $stmt->bindValue(1, $idPartida);
                    $stmt->execute();
                    $numeroJugadores = $stmt->rowCount();

                    if ($numeroJugadores == 4) {
                        $stmt = $conexion->prepare("UPDATE partidas SET estado = 'Cerrada' WHERE id = ?");
                        $stmt->bindValue(1, $idPartida);
                        $stmt->execute();
                    }
                }

            } catch (PDOException $e){
                echo $e->getMessage();
            }

            ConexionBD::cerrar();
        }






    }





?>