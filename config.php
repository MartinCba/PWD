<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$dir = '/PWD/'; // Directorio donde se encuentra el proyecto dentro del servidor

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . $dir); //Define una constante ROOT_PATH que contiene la ruta absoluta a la raíz de tu proyecto. $_SERVER['DOCUMENT_ROOT'] devuelve la ruta al directorio raíz del servidor web, y se concatena con $dir para obtener la ruta completa.

define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $dir); //Define una constante BASE_URL que contiene la URL base de tu proyecto. $_SERVER['HTTP_HOST'] devuelve el nombre del host (por ejemplo, localhost), y se concatena con $directorio para obtener la URL completa.

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['ROOT'] = ROOT_PATH; //Guarda la ruta raíz del proyecto en una variable de sesión para que pueda ser utilizada en otras partes de la aplicación.

$ROOT = ROOT_PATH; // Define una variable $ROOT que contiene la ruta raíz del proyecto. Esto puede ser útil si prefieres usar una variable en lugar de una constante en algunas partes de tu código.