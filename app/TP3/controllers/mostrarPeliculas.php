<?php

class mostrarPeliculas
{
    public function __construct() {}
    /**
     * Analiza si el archivo ingresado corresponde a un archivo .txt,
     * retorna número entero dependiendo si es válido o no
     * @param string $nombreArchivo
     * @return int
     */
    function analizar($nombre)
    {
        $mensaje=0;
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
     * Retorna un mensaje
     * @return string
     */
    public function mensaje()
    {
        $msj = "<h1>La película introducida es: </h1>";
        return $msj;
    }
    /**
     * Recibe los datos y los retorna en un string.
     * @param string $titulo
     * @param string $actores
     * @param string $director
     * @param string $guion
     * @param string $produccion
     * @param int $anio
     * @param string $nacionalidad
     * @param string $genero
     * @param int $duracion
     * @param string $edad
     * @param string $sinopsis
     * @return string
     */
    public function mostrarCartelera($nombre, $titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $edad, $sinopsis)
    {
        $fueCargado = $this->analizar($nombre);

        if ($fueCargado == false) {
            $men = 'El archivo no puede ser cargado, revise que el formato sea PNG o JPG';
        } else {
            $men = "";
        }
        $msj = "
        <img src='../../files/$nombre' height='100px' width='200px' border='1px' alt='Pelicula'/>
        <br/>
        <span class='texto'>Título: </span><span class='descripcion'>" . $titulo . "</span></br>
        <span class='texto'>Actores: </span><span class='descripcion'>" . $actores . "</span></br>
        <span class='texto'>Director: </span><span class='descripcion'>" . $director . "</span></br>
        <span class='texto'>Guion: </span><span class='descripcion'>" . $guion . "</span></br>
        <span class='texto'>Produccion: </span><span class='descripcion'>" . $produccion . "</span></br>
        <span class='texto'>Año: </span><span class='descripcion'>" . $anio . "</span></br>
        <span class='texto'>Nacionalidad: </span><span class='descripcion'>" . $nacionalidad . "</span></br>
        <span class='texto'>Genero: </span><span class='descripcion'>" . $genero . "</span></br>
        <span class='texto'>Duracion: </span><span class='descripcion'>" . $duracion . "</span></br>
        <span class='texto'>Restricciones de Edad: </span><span class='descripcion'>" . $edad . "</span></br>
        <span class='texto'>Sinopsis: </span><span class='descripcion'>" . $sinopsis . "</span></br>";

        return $msj;
    }
}
