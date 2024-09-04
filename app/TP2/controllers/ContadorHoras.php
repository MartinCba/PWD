<?php
class ContadorHoras
{
    public function __construct() {}

    /**
     * Recibe horas, retorna la suma de todas ellas
     * @param array $datos
     * @return string
     */
    public function sumarHoras($datos)
    {
        $lunes = $datos["lunes"];
        $martes = $datos["martes"];
        $miercoles = $datos["miercoles"];
        $jueves = $datos["jueves"];
        $viernes = $datos["viernes"];

        $total = $lunes + $martes + $miercoles + $jueves + $viernes;

        $msj = "Vas a cursar " . $total . "hs semanales.";

        return $msj;
    }
}
