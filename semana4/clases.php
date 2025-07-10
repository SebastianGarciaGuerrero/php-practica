<?php

class Estudiante {

   // Propiedades

public $nombre;

public $apellido;

   // Métodos

public function matricular() {

echo "El alumno {$this->nombre} {$this->apellido} está inscrito";

    }

}