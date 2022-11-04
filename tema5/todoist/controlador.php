<?php
    include('modelo.php');

    //INICIO CON LOGIN
    if (isset($_POST['acceso'])) {  
        //Comprobar que el usuario existe
        $login = $_POST['login'];
        if (existeUsuario($login)) {
            echo "Usuario existe";
        } else {
            echo "Usuario no existe";
        }



        //Comprobar que la contraseña es correcta
    } else {
            
    }





?>