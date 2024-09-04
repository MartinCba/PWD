<?php
class ValorEntrada
{
    public function __construct() {}

    /**
     * Recibe datos, retorna monto de tarifa
     * @param array $datos
     * @return mixed
     */
    public function calcular($datos)
    {
        $edad = $datos['edad'];
        $estudia = $datos['estudia'];
        $tarifa = 300;
        if ($estudia == "si" && $edad < 12) {
            $tarifa = 160;
        } elseif ($estudia == "si" && $edad >= 12) {
            $tarifa = 180;
        } elseif ($edad < 12) {
            $tarifa = 160;
        }
        return $tarifa;
    }
}
