

        </div> <!-- Ajax -->

    </div>

<!---------------------- MODALES ------------------------->
<!-- FORM NUEVA PARTIDA -->
<div class="modal fade" id="modalNuevaPartida" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Organizar pachanga</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form id='formNuevaPartida' class='row g-3 needs-validation'>
                <div class='col-md-10'>
                    <label class='form-label'>Fecha</label>
                    <input type='date' class='form-control' name='fecha' value='' required>
                </div>
                <div class='col-md-4'>
                    <label class='form-label'>Hora</label>
                    <input type='text' class='form-control' name='hora' required>
                </div>
                <div class='col-md-10'>
                    <label class='form-label'>Ciudad</label>
                    <input type='text' class='form-control' name='ciudad' required>
                </div>
                <div class='col-md-10'>
                    <label class='form-label'>Lugar</label>
                    <input type='text' class='form-control' name='lugar' required>
                </div>
                <div class='col-md-6'>
                    <label class='form-label'>Está cubierto</label>
                </div>
                <div class='col-md-6'>
                    <input type='checkbox' class='form-check-input' name='cubierto' required>
                </div>
                
                <input type='hidden' name='accion' value='crearPartida'>
                <button type="submit"  id='nuevaPartida' accion='nuevaPartida' class="btn btn-primary form-control">Guardar</button>
            </form>
      </div>
      
    </div>
  </div>
</div>


            
<!---------------------- FIN MODALES ------------------------->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<!----------------------- AJAX -------------------->

<script>
    //Cuando cargue la página llama a inicio, donde tendré los escuchadores de los eventos
    window.addEventListener("load" ,inicio);

    //Función que escucha los eventos
    function inicio() {

        //Botón de borrar partida
        document.getElementById("ajax").addEventListener("click", async function(e)  {
            e.preventDefault(); //Para no enviar el form

            //Botón BORRAR. Con closest buscamos el botón dentro del div 'ajax' más cercano a la ocurrencia del evento click
            let botonBorrar = e.target.closest("a[accion=borrarP]");
		    if (botonBorrar) {
                const datos = new FormData(); //Lo mandamos siempre con POST
                datos.append("accion","borrarP"); //Acción para que PHP sepa de donde vienen la petición HTTP
                datos.append("id",botonBorrar.getAttribute("valor"));
                const response = await fetch("enrutador.php", { //Fetch hace la petición
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    body: datos
                });                
                //Tratar la respuesta
                document.getElementById("ajax").innerHTML = await response.text(); //Lo que devuelve la Vista
		    }

            let botonInscribir = e.target.closest("a[accion=inscribirse]");
		    if (botonInscribir) {
                const datos = new FormData(); //Lo mandamos siempre con POST
                datos.append("accion","inscribirse"); //Acción para que PHP sepa de donde vienen la petición HTTP
                datos.append("idPartida",botonInscribir.getAttribute("partida"));
                datos.append("idJugador",botonInscribir.getAttribute("jugador"));
                const response = await fetch("enrutador.php", { //Fetch hace la petición
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    body: datos
                });                
                //Tratar la respuesta
                document.getElementById("ajax").innerHTML = await response.text(); //Lo que devuelve la Vista
		    }
        });
        //Fin botón borrar partida ---------------------------------

        //Botón de ver partida
        document.getElementById("ajax").addEventListener("click", async function(e)  {
            e.preventDefault(); //Para no enviar el form

            //Botón BORRAR. Con closest buscamos el botón dentro del div 'ajax' más cercano a la ocurrencia del evento click
            let botonBorrar = e.target.closest("a[accion=verP]");
		    if (botonBorrar) {
                const datos = new FormData(); //Lo mandamos siempre con POST
                datos.append("accion","verP"); //Acción para que PHP sepa de donde vienen la petición HTTP
                datos.append("id",botonBorrar.getAttribute("valor"));
                const response = await fetch("enrutador.php", { //Fetch hace la petición
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    body: datos
                });                
                //Tratar la respuesta
                document.getElementById("ajax").innerHTML = await response.text(); //Lo que devuelve la Vista
		    }
        });
        //Fin botón ver partida ---------------------------------


        //Botón cargar formulario nueva partida --------------------
        document.getElementById("nuevaPartida").addEventListener("click", async function(e) {
            e.preventDefault();
                
            //Cerrar modal
            var myModalEl = document.getElementById('modalNuevaPartida');
            var modal = bootstrap.Modal.getInstance(myModalEl);
            modal.hide();

            const datos = new FormData(document.getElementById("formNuevaPartida")); //Lo mandamos siempre con POST
            datos.append("accion","crearPartida"); 

            const response = await fetch("enrutador.php", { method: 'POST', body: datos });                
            //Tratar la respuesta
            document.getElementById("ajax").innerHTML = await response.text(); //Lo que devuelve la Vista 


        });
        //Fin botón cargar formulario nueva partida ----------------
        
    }

</script>





</body>
</html>