<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . '/app/Controllers/RouterController.php';

// Constantes
define('BASE_URL', '/elfaro/public');

// Crear una instancia del controlador de rutas
$router = new RouterController();


// Obtener la página solicitada de la URL, default a 'home'
$page = $_GET['page'] ?? 'home';

ob_start();  // Inicia el buffering de salida

// Obtener el contenido de la página a través del controlador
$router->route($page);

$content = ob_get_clean();  // Guarda el contenido del buffer y limpia el buffer

// Incluir el layout general, que usa el contenido obtenido
require '../app/Views/layout.php';