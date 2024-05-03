<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . '/app/Controllers/RouterController.php';

// Constantes
define('BASE_URL', '/elfaro/public');

// Crear una instancia del controlador de rutas
$router = new RouterController();

// Obtener la página solicitada de la URL, default a 'home'
$page = $_GET['page'] ?? 'home';

// Obtener el contenido de la página a través del controlador
$content = $router->route($page);

// Incluir el layout general, que usa el contenido obtenido
require '../app/Views/layout.php';