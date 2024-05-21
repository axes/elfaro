<?php
require_once '../../app/config/db.php';

// Conectarse a la base de datos
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexión exitosa a la base de datos MySQL. Versión del servidor: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "<br>";

    // Obtener todos los usuarios
    $stmt = $pdo->query('SELECT id_user, username, password FROM user');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        // Verificar si la contraseña ya está hasheada (suponiendo que las contraseñas no hasheadas tienen una longitud menor a 60 caracteres)
        if (strlen($user['password']) < 60) {
            // Hashear la contraseña
            $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);

            // Actualizar la contraseña en la base de datos
            $updateStmt = $pdo->prepare('UPDATE user SET password = :password WHERE id_user = :id_user');
            $updateStmt->execute(['password' => $hashedPassword, 'id_user' => $user['id_user']]);

            echo "Contraseña de usuario " . $user['username'] . " actualizada.<br>";
        }
    }

    echo "Migración completada.";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>
