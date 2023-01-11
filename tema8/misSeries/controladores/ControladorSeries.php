<?php
    class ControladorSeries {

        public static function mostrarSeries($pagina) {            
            VistaSeries::mostrarSeriesAPI($pagina);

        }

        public static function mostrarSerie($id) {
            VistaSeries::mostrarSerieAPI($id);
        }

        public static function votarSerie($id, $valor) {
            //Llamar al modelo para insertar esto
            echo $id . $valor;
        }

    }


?>