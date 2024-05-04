<?php

require_once ROOT_PATH . '/app/Models/User.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showRegistrationForm()
    {
        include '../app/Views/pages/user_registration.php';
    }

    public function registerUser()
    {
        header('Content-Type: application/json');
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Asumiendo que la lógica para agregar usuario es correcta y no hay errores.
        $this->userModel->addUser($username, $password);

        // Almacenar información del usuario en la sesión
        $_SESSION['username'] = $username;

        // Enviar respuesta JSON
        echo json_encode(['success' => true, 'message' => "Hola, $username! Te has registrado exitosamente."]);
        exit;
    }

    public function showLoginForm() {
        include '../app/Views/pages/login.php';
    }

    public function loginUser() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        foreach ($this->userModel->getUsers() as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $_SESSION['username'] = $username;
                echo json_encode(['success' => true, 'message' => "Bienvenido, $username!"]);
                exit;
            }
        }
    
        echo json_encode(['success' => false, 'message' => "Nombre de usuario o contraseña incorrectos."]);
        exit;
    }



    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();  // Destruir la sesión

        header('Location: index.php?page=home');  // Redireccionar al inicio o a la página de login
        exit;
    }
}
