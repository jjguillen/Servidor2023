<?php
    if (isset($_POST)) {  //Saber si ha mandado algo por GET
        

        //Comprobar que la contraseña es correcta
        if (strcmp($_POST['password'],"12345678") == 0) {
            echo "Contraseña correcta";
            if (isset($_POST['email'])) {
                echo "<br>Bienvenido ".$_POST['email'];
            }
        } else {
            //No se puede hacer ningún echo antes de él
            header("Location: ./loginUsuario.php?mensaje=Password incorrecto"); 
        }
    }


?>