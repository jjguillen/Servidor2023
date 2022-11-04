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
                pintarTareas($tareas);

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

        //PINTAR EL FORMULARIO DE NUEVA TAREA
        if ($_GET['accion'] == 'nuevaTarea') {
            pintarFormularioNuevaTarea();
        }

    }


?>