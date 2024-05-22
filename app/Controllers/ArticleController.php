<?php

require_once ROOT_PATH . '/app/Models/ArticleModel.php';

class ArticleController
{
    private $articleModel;

    public function __construct($pdo)
    {
        $this->articleModel = new ArticleModel($pdo);
    }

    // Método para mostrar el home con los artículos
    public function home()
    {
        $generalNews = $this->articleModel->getRecentArticlesByCategory('Noticias Generales', 3);
        $sportsNews = $this->articleModel->getRecentArticlesByCategory('Deportes', 3);
        $businessNews = $this->articleModel->getRecentArticlesByCategory('Negocios', 3);

        // Incluir la vista y pasar las variables
        include '../app/Views/pages/home.php';
    }

    // Método para mostrar el panel de administración de artículos
    public function index()
    {
        $articles = $this->articleModel->getAllArticles();
        include ROOT_PATH . '/app/Views/admin/articles_index.php';
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

    public function create()
    {
        $isEdit = false;
        include ROOT_PATH . '/app/Views/admin/article_form.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $title = $_POST['title'];
            $image = $_POST['image'];
            $excerpt = $_POST['excerpt'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $author = $_SESSION['user_id'];

            $this->articleModel->createArticleWithMeta($title, $image, $excerpt, $content, $category, $author);
            header('Location: ' . BASE_URL . '/index.php?page=admin');
            exit();
        }

        include ROOT_PATH . '/app/Views/admin/article_create.php';
    }

    public function edit($id)
    {
        $article = $this->articleModel->getArticleById($id);
        $isEdit = true;
        include ROOT_PATH . '/app/Views/admin/article_form.php';
    }

    public function update($id)
    {
        $title = $_POST['title'];
        $image = $_POST['image'];
        $excerpt = $_POST['excerpt'];
        $content = $_POST['content'];
        $category = $_POST['category'];
        $date = $_POST['date'];

        $this->articleModel->updateArticle($id, $title, $image, $excerpt, $content, $category, $date);
        header('Location: ' . BASE_URL . '/index.php?page=admin');
    }

    public function delete($id)
    {
        $this->articleModel->deleteArticle($id);
        header('Location: ' . BASE_URL . '/index.php?page=admin');
    }
}
