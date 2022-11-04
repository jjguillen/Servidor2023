<?php

    include('cabecera.php');
    include('modelo.php');

    $tareas = selectTareas($_GET['id']);

    echo "<ul class='list-group'>";
    //Cabecera
    echo "<li class='list-group-item fw-bold'>";
    echo "<div class='row'>";
    echo "<div class='col'>Nombre</div>";
    echo "<div class='col'>Descripción</div>";
    echo "<div class='col'>Prioridad</div>";
    echo "<div class='col'>Fecha Creación</div>";
    echo "<div class='col'>Fecha Fin</div>";
    echo "<div class='col'>Acciones</div>";
    echo "</div>";
    echo "</li>";
    //Contenido
    forEach($tareas as $tarea) {
      echo "<li class='list-group-item'>";
      echo "<div class='row'>";

      forEach($tarea as $key => $value) {
        if ($key != "id" && $key != "idUsuario") {
          echo "<div class='col'>";
          echo $value;
          echo "</div>";
        }
      }

      //Acciones
      echo "<div class='col'>";
      echo "x";
      echo "</div>";

      echo "</div>";
      echo "</li>";
    }
    echo "</ul>";

    include('pie.php');



?>