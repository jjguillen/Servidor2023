<?php


  //Función para limpiar los input de los formularios
  function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
  }


  //Función que pinta una lista de tareas
  function pintarTareas($tareas) {
    include('cabecera.php');

    echo "<div class='row justify-content-end p-3'>";
    echo "<div class='col-10'></div>";
    echo "<div class='col-2'>";
    echo "<a href='controlador.php?accion=nuevaTarea' class='btn btn-primary'>Nueva Tarea</a>";
    echo "</div>";
    echo "</div>";

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
  }


  function pintarFormularioNuevaTarea() {
    include('cabecera.php');
?>

      <h2>Nueva Tarea</h2>
      <div class='container'>
        <div class='row' style='width: 380px;'>
          <form action="controlador.php?insertarTarea" method='post' > 
              <div class='mb-3'>
                  <label for='nombre' class='form-label'>Nombre</label>
                  <input type='text' name='nombre' class='form-control' aria-describedby='emailHelp'>
              </div>
              <div class='mb-3'>
                  <label for='descripcion' class='form-label'>Descripción</label>
                  <textarea class='form-control' name="descripcion" id="" cols="30" rows="10"></textarea>
              </div>
              <div class='mb-3'>
                  <label for='prioridad' class='form-label'>Prioridad</label>
                  <input type='range' name='prioridad' step='1'   class='form-control' min='1' max='5'>
              </div>
              <div class='mb-3'>
                  <label for='fechaFin' class='form-label'>Fecha Fin</label>
                  <input type='date' name='fechaFin' id='fechaFin' class='form-control' aria-describedby='emailHelp'>
              </div>
              <button type='submit' name='insertar' class='btn btn-primary'>Enviar</button>
          </form>
        </div>
      </div>

<script>
document.getElementById('fechaFin').valueAsDate = new Date();
</script>

<?php
    include('pie.php');
  }

  ?>

