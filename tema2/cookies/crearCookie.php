<?php

//Si he pinchado en un link
if ($_GET) {

    //Leemos lo que ya te gusta
    $gustos = $_COOKIE['servidor'];
    $gustos = $gustos."#".$_GET['interes'];

    //Separar los gustos y meterlos en un array
    $gustosArray = explode("#",$gustos);
    $gustosArray = array_unique($gustosArray);

    //Volvemos a convertir a string ya quitados los duplicados
    $gustosString = implode("#", $gustosArray);
    
    setcookie('servidor',$gustosString, time()+36000, "/tema2", "localhost", false, true);
    //echo "Cookie creada";

    header("Location: index.php");
}


  





?>