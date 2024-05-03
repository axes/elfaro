<!-- article_show.php -->
<div class="container">
    <?php if ($article) : ?>
        <div class="article-detail">
            <h1><?= htmlspecialchars($article['title']) ?></h1>
            <img src="<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['title']) ?>">
            <p><?= htmlspecialchars($article['content']) ?></p>
        </div>
    <?php else : ?>
        <p>Artículo no encontrado.</p>
    <?php endif; ?>
</div>