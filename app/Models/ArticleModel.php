<?php

class ArticleModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Obtener todos los artículos
    public function getAllArticles()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Article");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un artículo por ID
    public function getArticleById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Article WHERE id_article = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $article = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($article) {
            $article['meta'] = $this->getArticleMeta($id);
        }

        return $article;
    }

    // Obtener artículos por categoría
    public function getArticlesByCategory($category)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Article WHERE category = :category");
        $stmt->bindParam(':category', $category, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener los artículos más recientes por categoría (limite 3) con metadatos
    public function getRecentArticlesByCategory($category, $limit = 3)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Article WHERE category = :category ORDER BY date DESC LIMIT :limit");
        $stmt->bindParam(':category', $category, PDO::PARAM_STR);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Agregar metadatos a cada artículo
        foreach ($articles as &$article) {
            $article['meta'] = $this->getArticleMeta($article['id_article']);
        }

        return $articles;
    }

    public function getArticleMeta($articleId)
    {
        $stmt = $this->pdo->prepare("SELECT meta_key, meta_value FROM ArticleMeta WHERE article_id = :articleId");
        $stmt->bindParam(':articleId', $articleId, PDO::PARAM_INT);
        $stmt->execute();
        $meta = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

        return $meta;
    }
}
