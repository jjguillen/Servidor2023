    </div>
    <!-- Contenedor -->

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-dark">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span class="text-light font-weight-bold">Copyright &copy; BLIBLIOTECA EMI</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Core plugin JavaScript-->
    <script src="./p/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./p/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./p/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="./p/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="./p/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./p/js/demo/chart-area-demo.js"></script>

    <script>

        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

    </script>
    <script src="./p/js/demo/chart-bar-demo.js"></script>


    <!-- AJAX --->
    <script>

        //Botones de inicio -----------------------------------------------------------
        async function inicio() {
            document.getElementById('divdni').style.visibility = 'visible';
            document.getElementById('divestado').style.visibility = 'visible';

            const datos = new FormData(); //Lo mandamos siempre con POST
            datos.append("accion","inicioAjax"); //Acción para que PHP sepa de donde vienen la petición HTTP
            const response = await fetch("enrutador.php", { //Fetch hace la petición
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    body: datos
            });                
            //Tratar la respuesta
            document.getElementById("contenedor").innerHTML = await response.text(); 

        }

        document.getElementById("botonInicio").addEventListener('click', inicio);
        document.getElementById("botonPrestamos").addEventListener('click', inicio);

        //Botón nuevo préstamo -----------------------------------------------------------
        document.getElementById("formularioPrestamo").addEventListener('click', async function() {
            document.getElementById('divdni').style.visibility = 'hidden';
            document.getElementById('divestado').style.visibility = 'hidden';


            const datos = new FormData(); //Lo mandamos siempre con POST
            datos.append("accion","formularioPrestamo"); //Acción para que PHP sepa de donde vienen la petición HTTP
            const response = await fetch("enrutador.php", { //Fetch hace la petición
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    body: datos
            });                
            //Tratar la respuesta
            document.getElementById("contenedor").innerHTML = await response.text(); 

            //Capturar click een el botón crear después de pintar el formulario
            document.getElementById("formCrear").addEventListener('submit', async function(e) {
                e.preventDefault(); //Para que no envíe el formulario en los botones submit

                const datos = new FormData(e.target);
                datos.append('accion', 'crearPrestamo');

                const response = await fetch("enrutador.php", { //Fetch hace la petición
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    body: datos
                });    

                //Tratar la respuesta
                document.getElementById("contenedor").innerHTML = await response.text(); 

            });
        });

        //Botón de buscar por dni

        //Botón de buscar por estado
        document.getElementById("formBuscarEstado").addEventListener('submit', async function(e) {
            e.preventDefault();

            const datos = new FormData(e.target);
            datos.append('accion', 'buscarPorEstado');

            const response = await fetch("enrutador.php", { //Fetch hace la petición
                method: 'POST', // *GET, POST, PUT, DELETE, etc.
                body: datos
            });    
            
            //Tratar la respuesta
            document.getElementById("contenedor").innerHTML = await response.text(); 

        });

        //Botones de modificar
        
        

    </script>

</body>

</html>