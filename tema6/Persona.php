<?php

class Persona {
    private $nombre;
    private $edad;
    private $sexo;
    public static $numOjos = 2;

    public function __construct($nombre="Persona", $edad="0", $sexo="M") {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->sexo = $sexo;
    }
 

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function presentate(){
        echo "Hola, soy " . $this->nombre;
    }

    public function pintar() {
        echo "<p>".$this->nombre."</p>";
        echo "<p>".$this->edad."</p>";
        echo "<p>".$this->sexo."</p>";
        echo "<p>".self::$numOjos."</p>";
    }

}

$pepe = new Persona(edad: 13, sexo: "H", nombre: "Javi");
$pepe->pintar();

$emi = new Persona(nombre: $pepe->getNombre(), edad: $pepe->getEdad(), sexo: $pepe->getSexo());

$otro = clone $pepe;

$otro->pintar();

echo "".Persona::$numOjos;

?>