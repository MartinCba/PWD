<?php

class Calculador
{
    public function __construct() {}
    /**
     * Recibe dos números y un tipo de operación, 
     * retorna resultado de la misma
     * @param int $num1
     * @param int $num2
     * @param string $operacion
     * @return string
     */
    public function calcular($num1, $num2, $operacion)
    {
        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multi":
                $resultado = $num1 * $num2;
                break;
            case "div":
                $resultado = $num1 / $num2;
                break;
        }
        $msj = "El resultado es: " . $resultado;
        return $msj;
    }
}
