<?php session_start(); ?>

<?php

    echo "Soy otra página";
    $nombre = "Hola";
    echo $nombre;

    forEach($_SESSION['nombres'] as $nombre) {
        echo $nombre."<br>";    
    }
     

    forEach($_SESSION['edades'] as $edad) {
        echo $edad."<br>";    
    }

?>