<?php

    if ($_POST) {

        if (isset($_POST['Login'])) {
            //Comprobar tamaño del password
            if (strlen($_POST['password']) > 8) {
                header('Location: tables.php');
            } else {
                header('Location: login.php?error=passwordcorto');
            }
        }

    }


?>