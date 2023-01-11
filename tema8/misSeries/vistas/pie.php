

        </div> <!-- Ajax -->

    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!----------------------- AJAX -------------------->

<script>
    //Cuando cargue la página llama a inicio, donde tendré los escuchadores de los eventos
    window.addEventListener("load" ,inicio);
/*
    //Función que escucha los eventos
    function inicio() {

        //Botón de borrar noticia
        document.getElementById("ajax").addEventListener("click", async function(e)  {
            e.preventDefault(); //Para no enviar el form

            //Botón BORRAR. Con closest buscamos el botón dentro del div 'ajax' más cercano a la ocurrencia del evento click
            let botonBorrar = e.target.closest("button[accion=borrarN]");
		    if (botonBorrar) {
                const datos = new FormData(); //Lo mandamos siempre con POST
                datos.append("accion","borrarN"); //Acción para que PHP sepa de donde vienen la petición HTTP
                datos.append("id",botonBorrar.value);
                
                const response = await fetch("enrutador.php", { //Fetch hace la petición
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    body: datos
                });                
                //Tratar la respuesta
                document.getElementById("ajax").innerHTML = await response.text(); //Lo que devuelve la Vista
		    }
        });
        //Fin botón borrar noticia ---------------------------------


        
    }
    */

</script>





</body>
</html>