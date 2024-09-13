<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['ROOT'])) {
    die("Error: La variable de sesión 'ROOT' no está definida.");
}

require_once $_SESSION['ROOT'] . 'config.php';

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

spl_autoload_register(function ($class_name) {
    $tps = array(
        $_SESSION['ROOT'] . '/app/TP1/',
        $_SESSION['ROOT'] . '/app/TP2/',
        $_SESSION['ROOT'] . '/app/TP3/',
        $_SESSION['ROOT'] . '/app/TP4/',
    );

    $directories = array(
        'controllers/',
        'models/',
        'models/connector/',
        'utils/'
    );

    foreach ($tps as $tp) {
        foreach ($directories as $directory) {
            $file = $tp . $directory . $class_name . '.php';
            if (file_exists($file)) {
                require_once($file);
                return;
            }
        }
    }
});
