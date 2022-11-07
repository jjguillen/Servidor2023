<?php
session_start();

    include_once('modelo.php');
    include_once('lib.php');

    //POST -----------------------------------------------
    //INICIO CON LOGIN
    if (isset($_POST['acceso'])) {  
        //Comprobar que el usuario existe
        $login = filtrado($_POST['login']);
        $password = filtrado($_POST['password']);
        if (existeUsuario($login)) {
            $id=0;
            if (passwordCorrecto($login, $password, $id)) {
                $_SESSION['login'] = $login;
                //Sacar todas las tareas de ese usuario de la BBDD
                $tareas = selectTareas($id);
                $tareasFinalizadas = selectTareasFinalizadas($id);
                pintarTareas($tareas, $tareasFinalizadas);

                //Para hacerlo con varios ficheros
                //header("Location: tareas.php?id=".$id);

            } else {
                header("Location: index.php?error=Password incorrecto");
            }
        } else {
            header("Location: index.php?error=Usuario no existe");
        }
    } else {   

    }

    //GET ----------------------------------------------------
    if (isset($_GET['accion'])) {
        //PINTAR TAREAS DE USUARIO
        if ($_GET['accion'] == 'cerrar') {
            session_destroy();
            header("Location: index.php");
        }

        //Voy al index pero ya estoy logueado
        if ($_GET['accion'] == 'acceso') {
            $id = getUsuario($_SESSION['login']);
            $tareas = selectTareas($id);
            $tareasFinalizadas = selectTareasFinalizadas($id);
            pintarTareas($tareas, $tareasFinalizadas);
        }

        if ($_GET['accion'] == 'borrarTarea') {
            borrarTarea(filtrado($_GET['id']));
            header("Location: controlador.php?accion=acceso");

        }

        if ($_GET['accion'] == 'finalizarTarea') {
            finalizarTarea(filtrado($_GET['id']));
            header("Location: controlador.php?accion=acceso");

        }
    }

    if (isset($_GET['insertarTarea'])) {
        $nombre = filtrado($_GET['nombre']);
        $descripcion = filtrado($_GET['descripcion']);
        $prioridad = filtrado($_GET['prioridad']);
        $fechaFin = filtrado($_GET['fechaFin']);
        insertarTarea($nombre,$descripcion,$prioridad,$fechaFin, getUsuario($_SESSION['login']));

        header("Location: controlador.php?accion=acceso");

    }

?>