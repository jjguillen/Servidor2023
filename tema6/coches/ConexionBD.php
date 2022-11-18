<?php

    class ConexionBD {

        private static $conexion;

        static function getConexion() {

            if (!isset($conexion)) {
                try {
                    //mariadb --> nombre del contenedor donde tengamos mysql
                    $dsn = "mysql:host=mariadb;dbname=ejemplo";
                    self::$conexion = new PDO($dsn, "root", "toor");
                } catch (PDOException $e){
                    echo $e->getMessage();
                }
            } 

            return self::$conexion; 
        }

    }



?>