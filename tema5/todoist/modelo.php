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

        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE login = ?");
        $stmt->bindValue(1, $login);
        $stmt->execute();
        //$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numero = $stmt->rowCount();

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

        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE login = ?");
        $stmt->bindValue(1, $login);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        $passwordBD = $usuario['password'];
        $id = $usuario['id'];

        $conexion = null; //Cerrar la conexión

        if ($passwordBD == $password)
            return true;
        else 
            return false;

    }

    /**
     * Obtener todas las tareas del BBDD del usuario $idUsuario
     */
    function selectTareas($idUsuario) {
        $conexion = conexionBD();

        $stmt = $conexion->prepare("SELECT * FROM tareas WHERE idUsuario = ?");
        $stmt->bindValue(1, $idUsuario);
        $stmt->execute();
        $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $conexion = null; //Cerrar la conexión

        return $tareas;
    }




?>