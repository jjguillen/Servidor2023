<?php

    class PrestamosBD {

        public static function getPrestamos() {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT prestamos.idPrestamo, libros.titulo, usuarios.dni, prestamos.fechaInicio, prestamos.fechaFin, prestamos.estado 
            FROM prestamos join libros join usuarios 
            WHERE prestamos.idLibro = libros.idLibro 
            AND prestamos.idUsuario = usuarios.idUsuario");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $prestamos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Prestamo");

            ConexionBD::cerrar();

            return $prestamos;
        }

        public static function getPrestamosPorDNI($dni) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT libros.titulo, usuarios.dni, prestamos.fechaInicio, prestamos.fechaFin, prestamos.estado 
            FROM prestamos join libros join usuarios 
            WHERE prestamos.idLibro = libros.idLibro 
            AND prestamos.idUsuario = usuarios.idUsuario 
            AND usuarios.dni=?");

            $stmt->bindValue(1, $dni);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $prestamos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Prestamo");

            ConexionBD::cerrar();

            return $prestamos;
        }

        public static function getPrestamosPorEstado($estado) {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT libros.titulo, usuarios.dni, prestamos.fechaInicio, prestamos.fechaFin, prestamos.estado 
            FROM prestamos join libros join usuarios 
            WHERE prestamos.idLibro = libros.idLibro 
            AND prestamos.idUsuario = usuarios.idUsuario 
            AND prestamos.estado=?");

            $stmt->bindValue(1, $estado);
            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $prestamos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Prestamo");

            ConexionBD::cerrar();

            return $prestamos;
        }


        public static function insertarPrestamo($prestamo) {
            $conexion = ConexionBD::conectar();

            try {
                //Insertar
                $stmt = $conexion->prepare("INSERT INTO prestamos (idLibro, idUsuario, fechaInicio, fechaFin, estado) VALUES (?, ?, ?, ?, ?)");
                // Bind
                $stmt->bindValue(1, $prestamo->getIdLibro());
                $stmt->bindValue(2, $prestamo->getIdUsuario());
                $stmt->bindValue(3, $prestamo->getFechaInicio());
                $stmt->bindValue(4, $prestamo->getFechaFin());
         
                echo $prestamo->getFechaFin();
                $stmt->bindValue(5, $prestamo->getEstado());
                // Ejecuta la consulta
                $stmt->execute();
            } catch (PDOException $e){
                echo $e->getMessage();
            }

            ConexionBD::cerrar();
        }

        
        public static function modificarPrestamo($id,$fecha,$estado) {
            $conexion = ConexionBD::conectar();

            try {
                //Insertar
                $stmt = $conexion->prepare("UPDATE prestamos SET fechaFin=?, estado=? WHERE idPrestamo=?");
                // Bind
          
                $stmt->bindValue(1, $fecha);
                $stmt->bindValue(2, $estado);
                $stmt->bindValue(3, $id);


                // Ejecuta la consulta
                $stmt->execute();
            } catch (PDOException $e){
                echo $e->getMessage();
            }

            ConexionBD::cerrar();
        }



  
        























    }

    



?>