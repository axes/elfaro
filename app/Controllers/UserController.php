<?php

require_once ROOT_PATH . '/app/Models/UserModel.php';

class UserController
{
    private $userModel;

    public function __construct($pdo)
    {
        $this->userModel = new UserModel($pdo);
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        include ROOT_PATH . '/app/Views/admin/users_index.php';
    }

    public function showLoginForm()
    {
        include ROOT_PATH . '/app/Views/pages/login.php';
    }

    public function showRegistrationForm()
    {
        include ROOT_PATH . '/app/Views/pages/register.php';
    }



    public function loginUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->userModel->getUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                echo json_encode(['success' => true, 'message' => 'Login exitoso.']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Nombre de usuario o contraseña incorrectos.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Método de solicitud no válido.']);
        }
        exit();
    }

    public function registerUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $email = $_POST['email'] ?? '';

            if ($this->userModel->getUserByUsername($username)) {
                echo json_encode(['success' => false, 'message' => 'El nombre de usuario ya está en uso.']);
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $this->userModel->addUser($username, $hashedPassword, $email);
                echo json_encode(['success' => true, 'message' => 'Registro exitoso. Ahora puedes iniciar sesión.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Método de solicitud no válido.']);
        }
        exit();
    }


    public function logoutUser()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "/index.php?page=home");
        exit();
    }

    // Editar usuario
    public function edit($id)
    {
        $user = $this->userModel->getUserById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $password = $_POST['password'] ?? null;

            $this->userModel->updateUser($id, $username, $email, $role, $password);
            header('Location: ' . BASE_URL . '/index.php?page=admin&action=manageUsers');
            exit();
        }

        include ROOT_PATH . '/app/Views/admin/user_edit.php';
    }

    public function delete($id)
    {
        $this->userModel->deleteUser($id);
        header('Location: ' . BASE_URL . '/index.php?page=admin&action=manageUsers');
        exit();
    }
}
