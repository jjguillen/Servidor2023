<?php

    include "CocheBD.php";


    $coches = CocheBD::getCoches();

    foreach($coches as $coche) {
        $coche->pintar();
    }


    $unCoche = new Coche("Mercedes", "EQS", "4848GHJ");
    echo CocheBD::insertCoche($unCoche);









?>