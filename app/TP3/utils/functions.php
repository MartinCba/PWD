<?php

/**
 * Recopila los datos enviados por los metodos POST y GET
 * y los devuelve en un arreglo asociativo.
 * @return array
 */

function dataSubmitted()
{

    $data = [];

    if (!empty($_POST)) {
        $data = $_POST;
    } elseif (!empty($_GET)) {
        $data = $_GET;
    }
    if (count($data)) {
        foreach ($data as $key => $value) {
            if ($value == '') {
                $data[$key] = null;
            }
        }
    }
    return $data;
}
