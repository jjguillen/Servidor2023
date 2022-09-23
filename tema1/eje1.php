<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">

		<?php
			//FUNCIONES
			function pintar($unArray) {
				foreach($unArray as $clave => $valor)
					echo $clave . " - " . $valor . "<br>";

				echo "<br>";
			}


		?>


		<?php 
			$variable = "";
			if($variable){ 
				echo "<p>Sólo se mostrará en caso positivo</p>";
			}else{ 
				echo "<p>Sólo se mostrará en caso negativo</p>";
			} 

			$edad = 18;
			if ($edad >= 18) {
				echo "Eres mayor de edad";
			} else {
				echo "No puedes conducir legalmente";
			}

			echo ($edad >= 18) ? "Eres mayor" : "Eres menor";

			$capitales = array();
			$capitales["España"] = "Madrid";
			$capitales["Francia"] = "Paris";
			$capitales["Alemania"] = "Berlín";

			echo "<br>";
			foreach ($capitales as $clave => $valor) {
				echo "La capital de " . $clave . " es " . $valor . "<br>";
			}

			$lista = array();
			$lista[0] = 5;
			$lista[1] = 2;
			$lista[2] = 4;
			
			pintar($lista);

			sort($lista, SORT_NUMERIC); //Reordena los índices también
			asort($lista); //Ordena los valores pero deja la índices asociados

			pintar($lista);

			for($i=0; $i < count($lista); $i++) {
				echo $lista[$i] . "<br>";
			}

			ksort($capitales); //Ordena por índice
			pintar($capitales);

			echo "<br>";

			$numeros = array();
			$numeros = array_fill(0, 5, 1);
			pintar($numeros);

			echo "<br>"; 
			$borrado = array_splice($numeros, 2, 1);
			pintar($numeros);
			echo "<br>Has borrado</br>";
			pintar($borrado);






		?>

			
		</div>
	  </div>
    </div>


<?php
    include_once("../pie.php");
?>
