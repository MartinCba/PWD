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
        $encontrar   = '.jpg';
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
            //Convertir el contenido en un textarea
            $archivo = file_get_contents('../../files/' . $nombre);
            $mensaje = "<div class='contenedorEnunciado'>
                       <p>Este es el contenido de su archivo de texto cargado</p>
                 </div>
                 <textarea rows='20' cols='30'>$archivo</textarea>";
        }

        return $mensaje;
    }
}
