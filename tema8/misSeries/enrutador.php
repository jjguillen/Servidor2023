<?php
    session_start();
    //session_destroy();

    //AUTOLOAD
    function autocarga($clase){ 
        $ruta = "./controladores/$clase.php"; 
        if (file_exists($ruta)){ 
          include_once $ruta; 
        }

        $ruta = "./modelo/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }
    } 
    spl_autoload_register("autocarga");


    //Función para filtrar los campos del formulario
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    if ($_REQUEST) {
        if (isset($_REQUEST['accion'])) {

            //Inicio - Formulario Login
            if ($_REQUEST['accion'] == "inicio") {
                ControladorLogin::mostrarFormularioLogin();
            }

            //Inicio - error de login
            if ($_REQUEST['accion'] == "error") {
                ControladorLogin::mostrarFormularioLoginError();
            }

            //Mostrar series
            if ($_REQUEST['accion'] == "mostrarSeries") {
                ControladorSeries::mostrarSeries(1);
            }

            //Mostrar series por pagina
            if ($_REQUEST['accion'] == "mostrarSeriesPagina") {
                ControladorSeries::mostrarSeries($_GET['pagina']);
            }
            

            //Mostrar series en detalle
            if ($_REQUEST['accion'] == "mostrarDetalle") {
                $id = filtrado($_GET['id']);
                ControladorSeries::mostrarSerie($id);
            }

            //Añadir votación a Mongo
            if ($_REQUEST['accion'] == "votar") {
                $id = filtrado($_REQUEST['id']); ;
                $valor = filtrado($_REQUEST['valor']);
                ControladorSeries::votarSerie($id, $valor);
            }


            //CheckLogin
            if ($_REQUEST['accion'] == "checkLogin") {
                $email = filtrado($_REQUEST['email']);
                $password = filtrado($_REQUEST['password']);
                ControladorLogin::chequearLogin($email, $password);
            }

           


        }
    }





?>