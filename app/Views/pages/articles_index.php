<!-- articles_index.php -->
<div class="container">
    <?php if (isset($articles) && is_array($articles)) : ?>
        <div class="articles-list">
            <?php foreach ($articles as $article) : ?>
                <div class="article-summary">
                    <h2><a href="index.php?page=article&id=<?= htmlspecialchars($article['id']) ?>"><?= htmlspecialchars($article['title']) ?></a></h2>
                    <p><?= htmlspecialchars($article['excerpt']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p>No hay artículos disponibles.</p>
    <?php endif; ?>
</div>