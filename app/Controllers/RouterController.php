<?php

require_once 'ArticleController.php';
require_once 'UserController.php';



class RouterController
{
    private $articleController;
    private $userController;

    public function __construct()
    {
        // Instanciar Clases de controladores
        $this->articleController = new ArticleController();
        $this->userController = new UserController();
    }

    public function route($page)
    {
        ob_start();
        switch ($page) {
            case 'home':
                // Mostrar la página de inicio
                $this->articleController->index();
                // include '../app/Views/pages/home.php';
                // Mostrar la lista de artículos en lugar de la página de inicio
                break;
            case 'article':
                $id = $_GET['id'] ?? null;
                if ($id) {
                    $this->articleController->show($id);
                } else {
                    include '../app/Views/pages/error404.php';
                }
                break;
            case 'edit-article':
                $id = $_GET['id'] ?? null;
                $this->articleController->edit($id);
                break;
            case 'contacto':
                include '../app/Views/pages/contacto.php';
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
                $this->userController->logout();
                break;
            default:
                include '../app/Views/pages/error404.php';
                break;
        }
        $content = ob_get_clean();
        return $content;
    }
}
