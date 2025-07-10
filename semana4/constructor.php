<?php

class Persona
{

   public $nombre; // Propiedad pública

   protected $edad; // Propiedad protegida

   private $email; // Propiedad privada

   private $admitido; // Propiedad privada

   public function __construct($nombre, $edad, $email)
   {

      $this->nombre = $nombre;

      $this->edad = $edad;

      $this->email = $email;

      $this->admitido = false;

   } // Método constructor

}

$persona = new Persona("Susana", 27, "susana@mail.com");

$persona->saludar(); // Imprime: Hola, mi nombre es Susana.

echo $persona->nombre; // Imprime: Susana

echo $persona->edad; // Error: No se puede acceder a una propiedad protegida desde fuera de la clase

echo $persona->email; // Error: No se puede acceder a una propiedad privada desde fuera de la clase