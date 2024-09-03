<?php
class Saludo
{
    public function __construct() {}
    /**
     * Recibe datos personales, retorna string con un saludo
     * @param array $datos
     * @return string
     */
    public function saludar($datos)
    {
        $nombre = $datos["nombre"];
        $apellido = $datos["apellido"];
        $edad = $datos["edad"];
        $direccion = $datos["direccion"];

        $msj = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;

        return $msj;
    }
}
