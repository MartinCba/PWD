<?php
class CargarTxt
{
    /**
     * Analiza si el archivo ingresado corresponde a un archivo .txt,
     * retorna número entero dependiendo si es válido o no
     * @param string $nombreArchivo
     * @return int
     */
    function analizar($nombre)
    {
        $mystring = $nombre;
        $encontrar   = '.txt';
        $pos = strpos($mystring, $encontrar);

        //controlar formatos
        if ($pos === false) {
            $mensaje = 0;
        } else if (move_uploaded_file($_FILES['archivo']['tmp_name'], '../../files/' . $nombre)) {
            $mensaje = 1;
        }
        return $mensaje;
    }
}
