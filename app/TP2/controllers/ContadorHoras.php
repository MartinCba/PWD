<?php
class ContadorHoras
{
    public function __construct() {}
    /**
     * Recibe horas, retorna la suma de todas ellas
     * @param int $lun
     * @param int $mar
     * @param int $mie
     * @param int $jue
     * @param int $vie
     * @return string
     */
    public function sumarHoras($lun, $mar, $mie, $jue, $vie)
    {
        $lunes = $lun;
        $martes = $mar;
        $miercoles = $mie;
        $jueves = $jue;
        $viernes = $vie;

        $total = $lunes + $martes + $miercoles + $jueves + $viernes;

        $msj = "Vas a cursar " . $total. "hs semanales.";

        return $msj;
    }
}
