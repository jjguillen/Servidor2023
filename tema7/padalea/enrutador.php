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

             //Inicio - Cerrar sesión
             if ($_REQUEST['accion'] == "cerrar") {
                $_SESSION['usuario'] = null;
                ControladorLogin::mostrarFormularioLogin();
            }

            //Inicio - error de login
            if ($_REQUEST['accion'] == "error") {
                ControladorLogin::mostrarFormularioLoginError();
            }

            //Mostrar partidas
            if ($_REQUEST['accion'] == "mostrarP") {
                ControladorPartida::mostrarPartidas();
            }

            //CheckLogin
            if ($_REQUEST['accion'] == "checkLogin") {
                $email = filtrado($_REQUEST['email']);
                $password = filtrado($_REQUEST['password']);
                ControladorLogin::chequearLogin($email, $password);
            }

            //Borrar partida
            if ($_REQUEST['accion'] == "borrarP") {
                $id = $_REQUEST['id'];
                ControladorPartida::borrarPartida($id);
            }

            //Ver partida
             if ($_REQUEST['accion'] == "verP") {
                $id = $_REQUEST['id'];
                ControladorPartida::mostrarPartidaAjax($id);
            }

            //Inscribirse en partida
             if ($_REQUEST['accion'] == "inscribirse") {
                $idPartida = $_REQUEST['idPartida'];
                $idJugador = $_REQUEST['idJugador'];
                ControladorPartida::inscribirseEnPartida($idPartida, $idJugador);
            }

            //Crear noticia en BD
            if ($_REQUEST['accion'] == "crearPartida") {
                $partida["fecha"] = filtrado($_REQUEST['fecha']);
                $partida["hora"] = filtrado($_REQUEST['hora']);
                $partida["ciudad"] = filtrado($_REQUEST['ciudad']);
                $partida["lugar"] = filtrado($_REQUEST['lugar']);
                if (isset($_REQUEST['cubierto'])) {
                    $partida["cubierto"] = 1;
                } else {
                    $partida["cubierto"] = 0;
                }
                $partida["estado"] = "abierta";

                ControladorPartida::crearPartida($partida);
            }



        }
    }





?>