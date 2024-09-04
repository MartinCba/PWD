<?php
class Deportes
{
    public function __construct() {}
    /**
     * Controla que sea mayor de edad y verifica si practica algun deporte
     * @param array $datos
     * @return string
     */
    public function mostrarDeportes($datos)
    {
        $edad = $datos['edad'];

        if ($edad >= 18) {
            $datos['mensajeEdad'] = "Es mayor de edad";
        } else {
            $datos['mensajeEdad'] = "Es menor de edad";
        }

        if (isset($datos['deportes'])) {
            $colDeportes = $datos['deportes'];
            $cadena = implode(", ", $colDeportes);
            $datos['deportes'] = "Practica: " . $cadena;
        } else {
            $datos['deportes'] = "No practica ningún deporte";
        }

        return $datos;
    }
}
