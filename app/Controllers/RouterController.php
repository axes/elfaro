<?php

require_once 'ArticleController.php';

class RouterController
{
    private $articleController;

    public function __construct()
    {
        $this->articleController = new ArticleController();
    }

    public function route($page)
    {
        ob_start();
        switch ($page) {
            case 'home':
                $this->articleController->index();
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
            default:
                include '../app/Views/pages/error404.php';
                break;
        }
        $content = ob_get_clean();
        return $content;
    }
}