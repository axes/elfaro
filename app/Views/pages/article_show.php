<!-- article_show.php -->
<div class="container">
    <?php if ($article): ?>
        <div class="article-detail">
            <h1><?= htmlspecialchars($article['title']) ?></h1>
            <p class="text-muted">
                <span>Publicado el: <?= date('d/m/Y', strtotime($article['date'])) ?></span> |
                <span>Categoría: <?= htmlspecialchars($article['category']) ?></span> |
                <span>Vistas: <?= htmlspecialchars($article['meta']['views'] ?? 0) ?></span> |
                <span>Me gusta: <?= htmlspecialchars($article['meta']['likes'] ?? 0) ?></span>
            </p>
            <img src="<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['title']) ?>" class="img-fluid">
            <p class="font-italic"><?= htmlspecialchars($article['excerpt']) ?></p>
            <p><?= nl2br(htmlspecialchars($article['content'])) ?></p>
        </div>
        <footer class="pt-4 mt-4 border-top">
            <p class="text-muted small">Estas noticias son ficticias y forman parte de un ejercicio académico para el Instituto AIEP. No representan hechos reales.</p>
        </footer>
    <?php else: ?>
        <p>Artículo no encontrado.</p>
    <?php endif; ?>
</div>
