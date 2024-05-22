<?php

require_once ROOT_PATH . '/app/Controllers/ArticleController.php';
require_once ROOT_PATH . '/app/Controllers/UserController.php';
require_once ROOT_PATH . '/app/Controllers/ContactController.php';
require_once ROOT_PATH . '/app/config/db.php';

class RouterController
{
    private $articleController;
    private $userController;
    private $contactController;


    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $pdo = require ROOT_PATH . '/app/config/db.php';

        $this->articleController = new ArticleController($pdo);
        $this->userController = new UserController($pdo);
        $this->contactController = new ContactController($pdo);

    }

    public function route($page)
    {
        switch ($page) {
            case 'home':
                $this->articleController->home();
                break;
            case 'article':
                $id = $_GET['id'] ?? null;
                if ($id) {
                    $this->articleController->show($id);
                } else {
                    $this->showErrorPage();
                }
                break;
            // case 'contacto':
            //     include ROOT_PATH . '/app/Views/pages/contacto.php';
            //     break;
            case 'contacto':
                $this->contactController->store();
                break;
            case 'register':
                $this->userController->showRegistrationForm();
                break;
            case 'registerUser':
                $this->userController->registerUser();
                break;
            case 'login':
                $this->userController->showLoginForm();
                break;
            case 'loginUser':
                $this->userController->loginUser();
                break;
            case 'logout':
                $this->userController->logoutUser();
                break;
                // Admin routes
            case 'admin':
                // Con esta condición protegemos las rutas de admin
                if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
                    include ROOT_PATH . '/app/Views/pages/error404.php';
                    break;
                }
                $action = $_GET['action'] ?? 'index';
                $id = $_GET['id'] ?? null;
                if ($action === 'create') {
                    $this->articleController->create();
                } elseif ($action === 'store') {
                    $this->articleController->store();
                } elseif ($action === 'edit' && $id) {
                    $this->articleController->edit($id);
                } elseif ($action === 'update' && $id) {
                    $this->articleController->update($id);
                } elseif ($action === 'delete' && $id) {
                    $this->articleController->delete($id);
                } elseif ($action === 'manageUsers') {
                    $this->userController->index();
                } elseif ($action === 'editUser' && $id) {
                    $this->userController->edit($id);
                } elseif ($action === 'updateUser' && $id) {
                    $this->userController->edit($id);
                } elseif ($action === 'deleteUser' && $id) {
                    $this->userController->delete($id);
                } elseif ($action === 'manageContacts') {
                    $this->contactController->index();
                } elseif ($action === 'deleteContact' && $id) {
                    $this->contactController->delete($id);
                } else {
                    $this->articleController->index();
                }
                break;
            default:
                $this->showErrorPage();
                break;
        }
    }

    private function showErrorPage()
    {
        include ROOT_PATH . '/app/Views/pages/error404.php';
    }
}
