<?php

class DatosPeliculas
{
    public function __construct() {}
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
    public function mostrarCartelera($titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $edad, $sinopsis)
    {
        $msj = "<span class='texto'>Título: </span><span class='descripcion'>" . $titulo . "</span></br>
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
