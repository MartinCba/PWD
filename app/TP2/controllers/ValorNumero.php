<?php

class ValorNumero
{
    public function __construct() {}

    /**
     * Recibe un número, retorna si es positivo, negativo o igual a 0
     * @param array $data
     * @return string
     */
    public function validarNumero($data)
    {
        $num = $data["numero"];
        if ($num > 0) {
            return "El número ingresado es positivo.";
        } elseif ($num < 0) {
            return "El número ingresado es negativo.";
        } else {
            return "El número ingresado es 0.";
        }
    }
};
