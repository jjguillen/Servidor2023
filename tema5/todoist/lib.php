<?php


  //Función para limpiar los input de los formularios
  function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
  }


  //Función que pinta una lista de tareas
  function pintarTareas($tareas, $tareasFinalizadas) {
    include('cabecera.php');

    echo "<div class='row justify-content-end p-3'>";
    echo "<div class='col-10'></div>";
    echo "<div class='col-2'>";
    echo "
    <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#nuevaTarea'>
      Nueva Tarea
    </button>";

    echo "</div>";
    echo "</div>";

    echo "<p class='text-secondary'>Tareas Pendientes</p>";
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
        if ($key != "id" && $key != "idUsuario" && $key != 'finalizada') {
          echo "<div class='col'>";
          echo $value;
          echo "</div>";
        }
      }

      //Acciones
      echo "<div class='col'>";
      echo "<a href='controlador.php?accion=borrarTarea&id=".$tarea['id']."' class='me-2'>";
      echo "<i class='fa-solid fa-trash'></i>";
      echo "</a>";
      echo "<a href='controlador.php?accion=finalizarTarea&id=".$tarea['id']."'>";
      echo "<i class='fa-solid fa-check text-danger'></i>";
      echo "</a>";
      echo "</div>";

      echo "</div>";
      echo "</li>";
    }
    echo "</ul>";


    //FINALIZADAS
    echo "<br>";
    echo "<p class='text-secondary'>Tareas Finalizadas</p>";
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
    forEach($tareasFinalizadas as $tarea) {
      echo "<li class='list-group-item'>";
      echo "<div class='row'>";

      forEach($tarea as $key => $value) {
        if ($key != "id" && $key != "idUsuario" && $key != 'finalizada') {
          echo "<div class='col'>";
          echo $value;
          echo "</div>";
        }
      }

      //Acciones
      echo "<div class='col'>";
      echo "<a href='controlador.php?accion=borrarTarea&id=".$tarea['id']."'>";
      echo "<i class='fa-solid fa-trash'></i>";
      echo "</a>";
      echo "</div>";

      echo "</div>";
      echo "</li>";
    }
    echo "</ul>";

    include('pie.php');
  }


?>