<?php session_start(); ?>

<?php

    $_SESSION['palabra'] = "hola";
    $_SESSION['palabraActual'] = "###a";
    $_SESSION['letras'] = array('a','c');

    echo "Letras dichas ";
    foreach($_SESSION['letras'] as $letra) {
        echo $letra.", ";
    }

    echo "<br>";
    echo "<a href='introducirLetra.php?letra=b'>B</a><br>";
    echo "<a href='introducirLetra.php?letra=e'>E</a><br>";
    echo "<a href='introducirLetra.php?letra=o'>O</a><br>";

    echo "Tu palabra ".$_SESSION['palabraActual'];

?>