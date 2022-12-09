<?php
    class ControladorLogin {

        public static function mostrarFormularioLogin() {
            VistaLogin::mostrarFormularioLogin();
        }

        public static function chequearLogin($email, $password) {
            $valido = UsuarioBD::chequearLogin($email, $password);



        }


    }

?>

