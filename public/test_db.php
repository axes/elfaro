<?php
// Incluye el archivo de configuración de la base de datos
require_once '../app/config/db.php';

try {
    // Conexión exitosa, realiza una consulta simple
    $stmt = $pdo->query('SELECT VERSION()');
    $version = $stmt->fetchColumn();
    echo "Conexión exitosa a la base de datos MySQL. Versión del servidor: " . $version;
} catch (\PDOException $e) {
    // Error en la conexión
    echo "Error de conexión a la base de datos: " . $e->getMessage();
}
?>
