<?php
class EstudiosSexo
{
    public function __construct() {}
    /**
     * Recibe datos, retorna cadena de string con ellos
     * @param string $nombre
     * @param string $apellido
     * @param string $edad
     * @param string $estudios
     * @param string $sexo
     * @return string
     */
    public function datosPersonales($nombre, $apellido, $edad, $estudios, $sexo)
    {
        $msj = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Estudios: " . $estudios . "</br>Sexo: " . $sexo . "</br>";

        return $msj;
    }
}
