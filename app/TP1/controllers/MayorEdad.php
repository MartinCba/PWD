<?php
class MayorEdad
{
    public function __construct() {}
    /**
     * Recibe datos, retorna si es mayor de edad(+18)
     * @param array $datos
     * @return string
     */
    public function esMayor($datos)
    {
        $edad = $datos["edad"];

        if ($edad >= 18) {
            $valor = true;
        } else {
            $valor = false;
        }
        return $valor;
    }
}
