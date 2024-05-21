<?php

require_once ROOT_PATH . '/app/Controllers/ArticleController.php';
require_once ROOT_PATH . '/app/Controllers/UserController.php';
require_once ROOT_PATH . '/app/config/db.php';

class RouterController
{
    private $articleController;
    private $userController;

    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $pdo = require ROOT_PATH . '/app/config/db.php';

        $this->articleController = new ArticleController($pdo);
        $this->userController = new UserController($pdo);
    }

    public function route($page)
    {
        switch ($page) {
            case 'home':
                $this->articleController->index();
                break;
            case 'article':
                $id = $_GET['id'] ?? null;
                if ($id) {
                    $this->articleController->show($id);
                } else {
                    $this->showErrorPage();
                }
                break;
            case 'contacto':
                include ROOT_PATH . '/app/Views/pages/contacto.php';
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
