<?php
class MayorEdad
{
    public function __construct() {}
    /**
     * Recibe datos, retorna si es mayor de edad(+18)
     * @param string $nombre
     * @param string $apellido
     * @param int $edad
     * @return string
     */
    public function esMayor($nombre, $apellido, $edad)
    {
        if ($edad >= 18) {
            $textoEdad = "</br>Es mayor de edad";
        } else {
            $textoEdad = "</br>Es menor de edad";
        }

        $msj = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>" . $textoEdad . "</br>";

        return $msj;
    }
}
