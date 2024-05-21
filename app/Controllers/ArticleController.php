<?php

require_once ROOT_PATH . '/app/Models/ArticleModel.php';

class ArticleController
{
    private $articleModel;

    public function __construct($pdo)
    {
        $this->articleModel = new ArticleModel($pdo);
    }

    public function index()
    {
        $generalNews = $this->articleModel->getRecentArticlesByCategory('Noticias Generales', 3);
        $sportsNews = $this->articleModel->getRecentArticlesByCategory('Deportes', 3);
        $businessNews = $this->articleModel->getRecentArticlesByCategory('Negocios', 3);

        // Incluir la vista y pasar las variables
        include '../app/Views/pages/home.php';
    }

    public function show($id)
    {
        $article = $this->articleModel->getArticleById($id);
        if ($article) {
            $article['meta'] = $this->articleModel->getArticleMeta($article['id_article']);
            include '../app/Views/pages/article_show.php';
        } else {
            include '../app/Views/pages/error404.php';
        }
    }

    public function edit($id)
    {
        $article = $this->articleModel->getArticleById($id);
        if ($article) {
            include '../app/Views/pages/article_edit.php';
        } else {
            include '../app/Views/pages/error404.php';
        }
    }
}
