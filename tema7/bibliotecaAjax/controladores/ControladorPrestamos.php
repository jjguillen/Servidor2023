<?php

class ControladorPrestamos {


    public static function mostrarPrestamos() {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $prestamos = PrestamosBD::getPrestamos();

        //Llamar a una vista para pintar esas películas
        VistaPrestamosTodos::render($prestamos);
    }

    public static function mostrarPrestamosAjax() {
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $prestamos = PrestamosBD::getPrestamos();

        //Llamar a una vista para pintar esas películas
        VistaPrestamosTodos::renderAjax($prestamos);
    }


    public static function formularioPrestamo() {
        $libros = LibroBD::getLibros();
        $usuarios = UsuariosBD::getUsuarios();
        VistaFormularioPrestamo::render($libros,$usuarios);
    }
    
    public static function crearPrestamo($prestamo) {
        $prestamo = new Prestamo($prestamo['idLibro'],$prestamo['idUsuario'],$prestamo['fechaInicio'],$prestamo['fechaFin'],$prestamo['estado']);
        PrestamosBD::insertarPrestamo($prestamo);
        
        //LLamar al modelo para obtener todas las películas en un array de Pelicula
        $prestamos = PrestamosBD::getPrestamos();

        //Llamar a una vista para pintar esas películas
        VistaPrestamosTodos::renderAjax($prestamos);
    }

    public static function actualizarPrestamo($id,$fecha,$estado) {
        PrestamosBD::modificarPrestamo($id,$fecha,$estado);
        echo '<script>window.location="'."index.php".'"</script>';
    }

    public static function buscarPorUser($dni) {
        $prestamos=PrestamosBD::getPrestamosPorDNI($dni);
        VistaPrestamosTodos::render($prestamos);
    }

    public static function buscarPorEstado($estado) {
        $prestamos=PrestamosBD::getPrestamosPorEstado($estado);
        VistaPrestamosTodos::renderAjax($prestamos);
    }


  









}




?>