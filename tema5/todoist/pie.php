
            </div>
        </div>
    </div>


<!-- MODAL INSERTAR TAREA -->
<div class="modal fade" id="nuevaTarea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Tarea</h5>
      </div>
      <div class="modal-body">
        <form id='formInsertarTarea' > 
              <div class='mb-3'>
                  <label for='nombre' class='form-label'>Nombre</label>
                  <input type='text' name='nombre' class='form-control' aria-describedby='emailHelp'>
              </div>
              <div class='mb-3'>
                  <label for='descripcion' class='form-label'>Descripción</label>
                  <textarea class='form-control' name="descripcion" id="" cols="30" rows="5"></textarea>
              </div>
              <div class='mb-3'>
                  <label for='prioridad' class='form-label'>Prioridad</label>
                  <input type='range' name='prioridad' step='1'   class='form-control' min='1' max='5'>
              </div>
              <div class='mb-3'>
                  <label for='fechaFin' class='form-label'>Fecha Fin</label>
                  <input type='date' name='fechaFin' id='fechaFin' class='form-control' aria-describedby='emailHelp'>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type='submit' name='insertarTarea' class='btn btn-primary' form="formInsertarTarea" formaction="controlador.php" formmethod="get">Enviar</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL MODIFICAR TAREA -->
<div class="modal fade" id="modificarTarea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Tarea</h5>
      </div>
      <div class="modal-body">
        <form id='formModificarTarea' > 
              <div class='mb-3'>
                  <label for='nombre' class='form-label'>Nombre</label>
                  <input type='text' name='nombre' class='form-control' aria-describedby='emailHelp'>
              </div>
              <div class='mb-3'>
                  <label for='descripcion' class='form-label'>Descripción</label>
                  <textarea class='form-control' name="descripcion" id="" cols="30" rows="5"></textarea>
              </div>
              <div class='mb-3'>
                  <label for='prioridad' class='form-label'>Prioridad</label>
                  <input type='range' name='prioridad' step='1'   class='form-control' min='1' max='5'>
              </div>
              <div class='mb-3'>
                  <label for='fechaFin' class='form-label'>Fecha Fin</label>
                  <input type='date' name='fechaFin' id='fechaFin' class='form-control' aria-describedby='emailHelp'>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type='submit' name='modificarTarea' class='btn btn-primary' form="formModificarTarea" formaction="controlador.php" formmethod="get">Enviar</button>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById('fechaFin').valueAsDate = new Date();

document.getElementById("acciones").addEventListener("click", async function(e) {
                //Tomamos el valor del id que viene en el propio link
                const modificar = e.target.closest("a[accion=modificar]");
                console.log(modificar.getAttribute("valor"));

                //Obtenemos el formulario al que le vamos a añadir un hidden con el id
                let formModificar = document.getElementById("formModificarTarea");
                //Crear input hidden
                var element1 = document.createElement("input");
                element1.type = "hidden";
                element1.value = modificar.getAttribute("valor");
                element1.name = "idTarea";
                formModificar.appendChild(element1);

                //Petición Ajax para traer datos de la tarea a modificar
                //............

                //Abrir modal con el hidden del id ya introducido. El resto de datos debería salir también cuando lo traigamos con Ajax
                var myModal = new bootstrap.Modal(document.getElementById("modificarTarea"), {});
                myModal.show()
                
            });
</script>


</body>
</html>