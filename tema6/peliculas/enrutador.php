<?php
session_start(); 

    //AUTOLOAD
    function autocarga($clase){ 
        $ruta = "./controladores/$clase.php"; 
        if (file_exists($ruta)){ 
          include_once $ruta; 
        }

        $ruta = "./modelos/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/peliculas/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/criticas/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/login/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }
    } 
    spl_autoload_register("autocarga");


    //Función para subir imágenes al servidor
    function subirImagen() {

        $directorioSubida = "imgs/";
        $extensionesValidas = array("jpg", "png", "gif");
        if(isset($_FILES['cartel'])){
            $errores = array();
            $nombreArchivo = $_FILES['cartel']['name'];
            $directorioTemp = $_FILES['cartel']['tmp_name'];
            $tipoArchivo = $_FILES['cartel']['type'];
            $arrayArchivo = pathinfo($nombreArchivo);
            $extension = $arrayArchivo['extension'];
            // Comprobamos la extensión del archivo
            if(!in_array($extension, $extensionesValidas)){
                $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
            }
    
            // Comprobamos y renombramos el nombre del archivo
            $nombreArchivo = $arrayArchivo['filename'];
            $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);
            $nombreArchivo = $nombreArchivo . rand(1, 100);
            // Desplazamos el archivo si no hay errores
            if(empty($errores)){
                $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;
                move_uploaded_file($directorioTemp, $nombreCompleto);
                //print "El archivo se ha subido correctamente";
            }
        }

        return $nombreCompleto;
    }

    //Función para filtrar los campos del formulario
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    if ($_REQUEST) {
        if (isset($_REQUEST['accion'])) {

            //Inicio
            if ($_REQUEST['accion'] == "inicio") {
                ControladorPelicula::mostrarPeliculas(-1);
            }

            //Error
            if ($_REQUEST['accion'] == "error") {
                $codigo = filtrado($_REQUEST['codigo']);
                ControladorPelicula::mostrarPeliculas($codigo);
            }

            //Ver película en detalle
            if ($_REQUEST['accion'] == "verPelicula") {
                $id = filtrado($_REQUEST['id']);
                ControladorPelicula::mostrarPelicula($id);
            }
            
            //Insertar película
            if ($_REQUEST['accion'] == "nuevaPelicula") {
                $titulo = filtrado($_REQUEST['titulo']);
                $sinopsis = filtrado($_REQUEST['sinopsis']);

                $cartel = subirImagen();
                
                $notaImdb = filtrado($_REQUEST['notaImdb']);
                $director = filtrado($_REQUEST['director']);
                $year = filtrado($_REQUEST['year']);
                $pelicula = new Pelicula($titulo,$sinopsis,$cartel,$notaImdb,$director,$year);
                ControladorPelicula::insertarPelicula($pelicula);
                
            }

            //Login usuario
            if ($_REQUEST['accion'] == "login") {
                $email = filtrado($_REQUEST['email']);
                $password = filtrado($_REQUEST['password']);
                ControladorUsuario::login($email,$password);
            }

            //Destruir sesion
            if ($_REQUEST['accion'] == "destruirsesion") {
                session_destroy();
                echo "<script>window.location='enrutador.php?accion=inicio'</script>";
            }

            //Nueva críticas
            if ($_REQUEST['accion'] == "nuevaCritica") {
                $nota = filtrado($_REQUEST['nota']);
                $texto = filtrado($_REQUEST['texto']);
                $fecha = filtrado($_REQUEST['fecha']);
                $id_pelicula = filtrado($_REQUEST['id_pelicula']);
                $usuario = unserialize($_SESSION['usuario']);
                ControladorCritica::nuevaCritica($usuario->getId(), $id_pelicula, $nota, $texto, $fecha);
            }

        }
    }





?>