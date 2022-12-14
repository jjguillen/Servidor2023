<?php
    
    class ControladorCritica {

        public static function nuevaCritica($id_usuario, $id_pelicula, $nota, $texto, $fecha) {
            $critica = new Critica($id_usuario, $id_pelicula, $nota, $texto, $fecha);
            CriticaBD::nuevaCritica($critica);
            echo "<script>window.location='enrutador.php?accion=verPelicula&id=".$id_pelicula."'</script>";
        }

    }



?>