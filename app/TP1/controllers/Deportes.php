<?php
class Deportes
{
    public function __construct() {}
    /**
     * Recibe datos, retorna cadena de string con ellos
     * @param array $datos
     * @return string
     */
    public function mostrarDeportes($nombre, $apellido, $edad, $deportesTexto)
    {
        $msj = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Practica: " . $deportesTexto;

        return $msj;
    }
}
