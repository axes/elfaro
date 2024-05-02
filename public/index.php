<?php

// Carga de archivos esenciales
// require_once '../app/Controllers/UsuarioController.php';

// Enrutamiento simple
$page = $_GET['page'] ?? 'home';  // Default a 'home' si no se especifica una página

switch ($page) {
    case 'home':
        require '../app/Views/pages/home.php';
        break;
    // Aquí puedes agregar más casos para otras páginas
    default:
        require '../app/Views/pages/404.php';  // Considera tener una vista para el error 404
}

// Cargar layout principal con el contenido de la página
require '../app/Views/layout.php';
