<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $jugadores = array(
            "jugador1" => array("nombre" => "Barbaro", "vida" => 100, "url" => 'https://fotos/barbaro.jpg',"desc" => "Da ostias como panes"),
            "jugador2" => array("nombre" => "Mago","vida" => 80,"url" =>'https://fotos/mago.jpg',"desc" => "Echa rayos por el ..."),
        );


        foreach($jugadores as $clave => $valor) {
            echo $clave ." ". $valor["nombre"]. " ". $valor["vida"] . "<br>";
        }

        foreach($jugadores as $valor) {
            echo $valor["nombre"]. " ". $valor["vida"] . "<br>";
        }


    ?>


</body>
</html>