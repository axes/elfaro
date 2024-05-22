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
        $stmt = $this->pdo->query('SELECT * FROM article');
        return $stmt->fetchAll();
    }

    // Obtener metadatos de artículo
    public function getArticleMeta($articleId)
    {
        $stmt = $this->pdo->prepare('SELECT meta_key, meta_value FROM articlemeta WHERE article_id = ?');
        $stmt->execute([$articleId]);
        return $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    }

    // Obtener un artículo por ID
    public function getArticleById($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM article WHERE id_article = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Obtener artículos por categoría
    public function getArticlesByCategory($category)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM Article WHERE category = :category");
        $stmt->bindParam(':category', $category, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Crear nuevo artículo
    public function createArticle($title, $image, $excerpt, $content, $category, $date)
    {
        $stmt = $this->pdo->prepare('INSERT INTO article (title, image, excerpt, content, category, date) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$title, $image, $excerpt, $content, $category, $date]);
    }

    // Crear nuevo artículo con metadatos
    public function createArticleWithMeta($title, $image, $excerpt, $content, $category, $author)
    {
        $stmt = $this->pdo->prepare('INSERT INTO article (title, image, excerpt, content, category, author) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$title, $image, $excerpt, $content, $category, $author]);
        $articleId = $this->pdo->lastInsertId();

        $metaStmt = $this->pdo->prepare('INSERT INTO articlemeta (article_id, meta_key, meta_value) VALUES (?, ?, ?)');
        $metaStmt->execute([$articleId, 'views', '0']);
        $metaStmt->execute([$articleId, 'likes', '0']);

        return $articleId;
    }

    public function updateArticle($id, $title, $image, $excerpt, $content, $category, $date)
    {
        $stmt = $this->pdo->prepare('UPDATE article SET title = ?, image = ?, excerpt = ?, content = ?, category = ?, date = ? WHERE id_article = ?');
        $stmt->execute([$title, $image, $excerpt, $content, $category, $date, $id]);
    }

    // Eliminar un artículo
    public function deleteArticle($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM article WHERE id_article = ?');
        $stmt->execute([$id]);
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
}
