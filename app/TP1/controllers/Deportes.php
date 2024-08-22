<?php
class Deportes
{
    /**
     * Recibe datos, retorna cadena de string con ellos
     * @param string $nombre
     * @param string $apellido
     * @param int $edad
     * @param string $deportesTexto
     * @return string
     */
    public function mostrarDeportes($nombre, $apellido, $edad, $deportesTexto)
    {
        $msj = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Practica: " . $deportesTexto;

        return $msj;
    }
}
