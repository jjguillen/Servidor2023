<?php session_start(); ?>

<?php
    //echo "Tu palabra ".$_SESSION['palabraActual'];

    //Comprobar que en la letra a adivinar está la letra pulsada
    $letraPulsada = $_GET['letra'];

    for($i=0; $i < strlen($_SESSION['palabra']); $i++) {
        if ($_SESSION['palabra'][$i] == $letraPulsada) {
            //echo "Acierto, está en la palabra";
            $_SESSION['palabraActual'][$i] = $letraPulsada;
        }
    }

    header("Location: index.php");

?>