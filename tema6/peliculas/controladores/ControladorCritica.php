<?php

    class ControladorCritica {

        public function mostrarFormularioNuevaCritica() {
            $peliculas = PeliculaBD::getPeliculas();
            $usuarios = UsuarioBD::getUsuarios();
            VistaFormularioNuevaCritica::render($peliculas, $usuarios);
        }

    }



?>