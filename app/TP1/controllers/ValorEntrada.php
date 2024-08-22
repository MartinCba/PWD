<?php
class ValorEntrada
{
    public function __construct() {}

    /**
     * Recibe datos, retorna monto de tarifa
     * @param int $edad
     * @param string $estudia
     * @return mixed
     */
    public function calcular($edad, $estudia)
    {
        $tarifa = 300;
        if ($estudia == "si" && $edad < 12) {
            $tarifa = 160;
        } elseif ($estudia == "si" && $edad >= 12) {
            $tarifa = 180;
        } elseif ($edad <12) {
            $tarifa = 160;
        }
        return $tarifa;
    }
}
