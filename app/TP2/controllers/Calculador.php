<?php

class Calculador
{
    public function __construct() {}
    /**
     * Recibe dos números y un tipo de operación, 
     * retorna resultado de la misma
     * @param array $datos
     * @return string
     */
    public function calcular($datos)
    {
        $num1 = $datos["num1"];
        $num2 = $datos["num2"];
        $operacion = $datos["operacion"];
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
