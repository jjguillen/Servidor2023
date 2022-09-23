<?php

    echo "Primer ejemplo";

    //Ej1. Hacer una tabla 5x3 desde php y rellenarla con 
    // 1 2 3
    // 4 5 6
    // 7 8 9
    // 10 11 12
    // 13 14 15

    echo "<table>";
    $contador = 1;
    for($i=0; $i<5; $i++) {
        echo "<tr>";

        for($j=0; $j<3; $j++) {
            echo "<td>" . $contador . "</td>";
            $contador++;
        }

        echo "</tr>";
    }
    echo "</table>";

    //Muestra la tabla de multiplicar de una variable $numero
    $numero = 6;

    for($i=1; $i<=10; $i++) {
        echo "$numero  *  $i = " . ($numero * $i) . "<br>";
    }

    //Dada la cadena "En un lugar de la Mancha de cuyo nombre"
    //Muestra la cadena al revés
    //strlen - devuelve la longitud de la cadena
    $cadena = "En un lugar de la Mancha de cuyo nombre";
    //echo strlen($cadena); 
    //echo $cadena[1];

    echo "<br>";
    for( $i=strlen($cadena)-1; $i>=0; $i--)
        echo $cadena[$i];



?>

