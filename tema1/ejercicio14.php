<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
    
    <?php
        $notas = array(
                array("nombre" => "Rubén", "materia" => "Servidor", "nota" => 7),
                array("nombre" => "Rubén", "materia" => "Cliente", "nota" => 8),
                array("nombre" => "Emi", "materia" => "Servidor", "nota" => 3),
                array("nombre" => "Emi", "materia" => "Cliente", "nota" => 7),
                array("nombre" => "Carlos", "materia" => "Servidor", "nota" => 8),
                array("nombre" => "Carlos", "materia" => "Cliente", "nota" => 8),
                array("nombre" => "Diego", "materia" => "Servidor", "nota" => 6),
                array("nombre" => "Diego", "materia" => "Cliente", "nota" => 4),
                array("nombre" => "Pilar", "materia" => "Servidor", "nota" => 7),
                array("nombre" => "Pilar", "materia" => "Cliente", "nota" => 9),
                array("nombre" => "Guillermo", "materia" => "Servidor", "nota" => 5)
        );


        array_multisort(array_column($notas,"nombre"), SORT_DESC, array_column($notas,"nota"), $notas);

        foreach($notas as $valor) {
            echo $valor["nombre"]." - ".$valor["materia"]." - ".$valor["nota"]."<br>";
        }

        echo array_sum(array_column($notas,"nota")) / count($notas);

        function suspenso($nota) {
            return $nota<5;
        }
        echo "<br>";
        echo count(array_filter(array_column($notas,"nota"),"suspenso"));
    ?>


		
        </div>
	  </div>
    </div>


<?php
    include_once("../pie.php");
?>
