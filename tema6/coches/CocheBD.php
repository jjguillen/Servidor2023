<?php

    include("Coche.php");
    include("ConexionBD.php");

    class CocheBD {

        static function getCoches() {

            $conexion = ConexionBD::getConexion();
            $coches = null;
            try {
                $stmt = $conexion->prepare("SELECT * FROM coches");
                $stmt->execute();
                $coches = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Coche');
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }   

            //echo "Filas: ".$stmt->rowCount();

            $conexion = null; //Cerrar la conexión
    
            return $coches;

        }

        static function getCoche($id) {

        }

        static function insertCoche($unCoche) {
            $conexion = ConexionBD::getConexion();

            try {
                $stmt = $conexion->prepare("INSERT INTO coches (marca, modelo, matricula) VALUES (?, ?, ?)" );
              
                $stmt->bindValue(1, $unCoche->getMarca());
                $stmt->bindValue(2, $unCoche->getModelo());               
                $stmt->bindValue(3, $unCoche->getMatricula());
               
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }

            //echo "Filas: ".$stmt->rowCount();

            return $conexion->lastInsertId(); 

        }

        static function updateCoche($unCoche, $id) {

        }

        static function deleteCoche($id) {

        }






    }





?>