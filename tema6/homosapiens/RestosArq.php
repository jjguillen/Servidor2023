<?php

    function cargar($clase) {
        $ruta = "./".$clase.".php";
        if (file_exists($ruta)){
            include_once $ruta;
        }
    }

    spl_autoload_register("cargar");



    class RestosArq {
        
        public $restos;

        public function __construct() {
            $this->restos = array();
        }

        public function add(HomoSapiens $resto) {
            array_push($this->restos, $resto);
        }

    }



    $restos = new RestosArq();
    
    $paco = new Persona(edad: 13, sexo: "H", nombre: "Paco");
    $manolo = new Neandertal();

    $restos->add($paco);
    $restos->add($manolo);


    foreach($restos->restos as $resto) {
        echo $resto->reproducirse();
        echo $resto->pintar();
    }




?>