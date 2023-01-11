<?php
    class ControladorSeries {

        public static function mostrarSeries($pagina) {            
            VistaSeries::mostrarSeriesAPI($pagina);

        }

        public static function mostrarSerie($id) {
            VistaSeries::mostrarSerieAPI($id);
        }

    }


?>