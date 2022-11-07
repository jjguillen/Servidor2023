
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


<script>
document.getElementById('fechaFin').valueAsDate = new Date();
</script>


</body>
</html>