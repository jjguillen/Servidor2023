<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
    
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

		
        </div>
	  </div>
    </div>


<?php
    include_once("../pie.php");
?>
