<?php

class CargarArchivo
{
    public function __construct() {}

    /**
     * Analiza si el archivo subido es de tipo texto (.pdf, .doc), retorna entero
     * @param string $nombre
     * @param int $tamanio
     * @return int
     */
    function analizar($nombre, $tamanio, $dir)
    {
        $subir = true;

        //Busco en el nombre si aparece pdf o doc
        $buscar   = '.pdf';
        $buscar2   = '.doc';
        $pos1 = strpos($nombre, $buscar);
        $pos2 = strpos($nombre, $buscar2);

        //Controlar formatos
        if ($pos1 === false && $pos2 === false) {
            $msj = 1;
            $subir = false;
        }

        //Chequear tamaño
        if ($tamanio > 2000000) {
            $subir = false;
            $msj = 2;
        }

        if ($subir == false) {
            $msj = 0;
        } else {
            if (move_uploaded_file($_FILES['archivo']['tmp_name'], $dir . $nombre)) {
                $msj = 3;
            } else {
                $msj = 0;
            }
        }
        return $msj;
    }

    /**
     * Recibe nombre de un archivo y un entero, retorna mensaje de éxito o fracaso 
     * sobre su respectiva subida
     * @param string $nombre
     * @param int $pudo
     * @return string
     */
    public function mostrarMensaje($nombre, $valor)
    {
        $msj = "Lo siento, hubo un error al cargar su archivo.";

        switch ($valor) {
            case 1:
                $msj = "Lo siento solo se permiten archivos PDF o DOC. \n";
                break;
            case 2:
                $msj = "El tamaño supera el límite. Máx. 2MB";
                break;
            case 3:
                $msj = "El archivo " . $nombre . " se ha subido con éxito <br />";
                $msj = '<div class = "textoCentrado" ><a href= "../../files/' . $nombre . '">Ver archivo</a></div>';
                break;
        }
        return $msj;
    }
}
