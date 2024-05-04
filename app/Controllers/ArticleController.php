<?php

require_once ROOT_PATH . '/app/Models/ArticleModel.php';

class ArticleController
{
  

    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    // public function index() {
    //     $articles = $this->articleModel->getAllArticles();
    //     include '../app/Views/pages/articles_index.php';
    // }

    public function index()
    {
        $allArticles = $this->articleModel->getAllArticles();
    
        // Filtrar y limitar a tres noticias generales
        $generalNews = array_slice(array_filter($allArticles, function ($article) {
            return $article['category'] === 'Noticias Generales';
        }), 0, 3);
    
        // Filtrar y limitar a tres noticias de deportes
        $sportsNews = array_slice(array_filter($allArticles, function ($article) {
            return $article['category'] === 'Deportes';
        }), 0, 3);

         // Filtrar y limitar a tres noticias de negocios
         $businessNews = array_slice(array_filter($allArticles, function ($article) {
            return $article['category'] === 'Negocios';
        }), 0, 3);
    
    
        // Pasar los datos a la vista
        include '../app/Views/pages/home.php';
    }

    public function show($id)
    {
        $article = $this->articleModel->getArticleById($id);
        if ($article) {
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
