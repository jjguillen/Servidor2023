<?php session_start(); ?>

<?php

    forEach($_SESSION['nombres'] as $nombre) {
        echo $nombre."<br>";    
    }
     

    forEach($_SESSION['edades'] as $edad) {
        echo $edad."<br>";    
    }

?>