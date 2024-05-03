<?php

require_once ROOT_PATH . '/app/Models/ArticleModel.php';

class ArticleController
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function index() {
        $articles = $this->articleModel->getAllArticles();
        include '../app/Views/pages/articles_index.php';
    }
    

    public function show($id) {
        $article = $this->articleModel->getArticleById($id);
        if ($article) {
            include '../app/Views/pages/article_show.php';
        } else {
            include '../app/Views/pages/error404.php';
        }
    }

    public function edit($id) {
        $article = $this->articleModel->getArticleById($id);
        if ($article) {
            include '../app/Views/pages/article_edit.php';
        } else {
            include '../app/Views/pages/error404.php';
        }
    }
}
