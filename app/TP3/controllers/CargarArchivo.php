<?php

class CargarArchivo
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
        $encontrar   = '.pdf';
        $pos = strpos($mystring, $encontrar);

        //controlar formatos
        if ($pos === false) {
            $mensaje = 0;
        } else if (move_uploaded_file($_FILES['archivo']['tmp_name'], '../../files/' . $nombre)) {
            $mensaje = 1;
        }
        return $mensaje;
    }

    /**
     * Recibe nombre de un archivo y un entero, retorna mensaje de éxito o fracaso 
     * sobre su respectiva subida
     * @param string $nombreArchivo
     * @param int $pudo
     * @return string
     */
    public function mostrarMensaje($nombre, $valor)
    {
        if ($valor == 0) {
            $mensaje = "<h3>Lo siento, solo se permiten archivos txt.</h3>\n";
        } else {
            $mensaje = "El archivo " . $nombre . " se ha subido con éxito <br />";
            $mensaje .= '<div class = "textoCentrado" ><a href= "../../files/' . $nombre . '">Ver archivo</a></div>';
        }

        return $mensaje;
    }
}
