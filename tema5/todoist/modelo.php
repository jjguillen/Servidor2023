<?php
    /**
     * Crea una conexión nueva a BBDD
     */
    function conexionBD() {
        $dbh = null;

        try {
            //mariadb --> nombre del contenedor donde tengamos mysql
            $dsn = "mysql:host=mariadb;dbname=todoist";
            $dbh = new PDO($dsn, "usuario", "usuario");
        } catch (PDOException $e){
            echo $e->getMessage();
        }

        return $dbh;
    }

    /**
     * 
     */
    function existeUsuario($login) {
        //mysql -u root -p
        //GRANT ALL PRIVILEGES ON todoist.* TO 'usuario'@'%';
        
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE login = ?");
            $stmt->bindValue(1, $login);
            $stmt->execute();
            //$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $numero = $stmt->rowCount();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión

        //Si me devuelve una fila es que existe un usuario con ese login
        if ($numero == 1) 
            return true;
        else 
            return false;
    }

    /**
     * 
     */
    function passwordCorrecto($login, $password, &$id) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE login = ?");
            $stmt->bindValue(1, $login);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            $passwordBD = $usuario['password'];
            $id = $usuario['id'];
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión

        if ($passwordBD == $password)
            return true;
        else 
            return false;

    }

     /**
     * 
     */
    function getUsuario($login) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE login = ?");
            $stmt->bindValue(1, $login);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            $id = $usuario['id'];
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
        return $id;
    }


    /**
     * Obtener todas las tareas del BBDD del usuario $idUsuario
     * Tareas no finalizadas o cuya fecha de fin no haya pasado
     */
    function selectTareas($idUsuario) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("SELECT * FROM tareas WHERE idUsuario = ? AND finalizada = 0 AND fechaFin >= ?");
            $stmt->bindValue(1, $idUsuario);
            $stmt->bindValue(2, date('Y-m-d'));
            
            $stmt->execute();
            $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión

        return $tareas;
    }

    /**
     * Obtener todas las tareas del BBDD del usuario $idUsuario
     * Tareas finalizadas o cuya fecha de fin haya pasado
     */
    function selectTareasFinalizadas($idUsuario) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("SELECT * FROM tareas WHERE idUsuario = ? AND ( finalizada = 1 OR fechaFin < ? ) ");
            $stmt->bindValue(1, $idUsuario);
            $stmt->bindValue(2, date('Y-m-d'));
            
            $stmt->execute();
            $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión

        return $tareas;
    }


    function insertarTarea($nombre, $descripcion, $prioridad, $fechaFin, $idUsuario) {

        
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("INSERT INTO tareas (nombre, descripcion, prioridad, fechaCreacion, fechaFin, idUsuario, finalizada) VALUES (?, ?, ?, ?, ?, ?, ?)" );
            $fechaCreacion = date('Y-m-d H:i:s');

            $stmt->bindValue(1, $nombre);
            $stmt->bindValue(2, $descripcion);
            $stmt->bindValue(3, $prioridad);
            $stmt->bindValue(4, $fechaCreacion);
            $stmt->bindValue(5, $fechaFin);
            $stmt->bindValue(6, $idUsuario);
            $stmt->bindValue(7, 0);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function borrarTarea($idTarea) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("DELETE FROM tareas WHERE id = ?");
            $stmt->bindValue(1, $idTarea);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }


    function finalizarTarea($idTarea) {
        $conexion = conexionBD();

        try {
            $stmt = $conexion->prepare("UPDATE tareas SET finalizada=1 WHERE id = ?");
            $stmt->bindValue(1, $idTarea);
            $stmt->execute();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        $conexion = null; //Cerrar la conexión
    }


?>