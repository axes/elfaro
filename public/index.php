<?php

// Constantes
define('BASE_URL', '/elfaro/public');

// Determinar qué página cargar
$page = $_GET['page'] ?? 'home';  // Carga 'home' por defecto si no se especifica una página

ob_start();  // Inicia el buffering de salida
switch ($page) {
    case 'home':
        include '../app/Views/pages/home.php';
        break;
    case 'contacto':
        include '../app/Views/pages/contacto.php';
        break;
    default:
        include '../app/Views/pages/error404.php';
        break;
}
$content = ob_get_clean();  // Guarda el contenido del buffer y limpia el buffer

// Incluir el layout general solo una vez y después de preparar $content
require '../app/Views/layout.php';