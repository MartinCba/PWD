<?php
class Saludo
{
    public function __construct(){}

    /**
     * Recibe datos personales, retorna string con un saludo
     * @param string $nombre
     * @param string $apellido
     * @param int $edad
     * @param string $direccion
     * @return string
     */
    public function saludar($nombre, $apellido, $edad, $direccion)
    {
        $msj = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;

        return $msj;
    }
}