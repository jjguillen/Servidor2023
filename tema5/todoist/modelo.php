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
        //$usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numero = $stmt->rowCount();

        $conexion = null; //Cerrar la conexión

        //Si me devuelve una fila es que existe un usuario con ese login
        if ($numero == 1) 
            return true;
        else 
            return false;
    }




?>