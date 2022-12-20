<?php

    class ControladorPartida {       

        public static function mostrarPartidas() {

            $partidas = PartidaBD::getPartidas();
            VistaPartidas::render($partidas);
        }

        public static function mostrarPartidasAjax() {

            $partidas = PartidaBD::getPartidas();
            VistaPartidas::renderAjax($partidas);
        }

        public static function mostrarPartidaAjax($id) {

            $partida = PartidaBD::getPartida($id);
            VistaPartidas::renderPartidaAjax($partida);
        }

        public static function borrarPartida($id) {
            PartidaBD::borrarPartida($id);
            ControladorPartida::mostrarPartidasAjax();
        }

        public static function crearPartida($partida) {
            $partidaOO = new Partida(0,$partida['fecha'],$partida['hora'],$partida['ciudad'],$partida['lugar'],$partida['cubierto'],$partida['estado']);
            PartidaBD::insertPartida($partidaOO);
            ControladorPartida::mostrarPartidasAjax($partida);
        }

        public static function inscribirseEnPartida($idPartida, $idJugador) {
            PartidaBD::inscribirJugador($idPartida, $idJugador);
            ControladorPartida::mostrarPartidaAjax($idPartida);
        }

    }







?>