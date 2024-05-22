<!-- En home.php -->
<div class="container mt-4">

    <div class="row mb-4">
        <h2>Noticias Generales</h2>

        <?php if (isset($generalNews) && is_array($generalNews)) : ?>
            <?php foreach ($generalNews as $news) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= htmlspecialchars($news['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($news['title']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($news['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($news['excerpt']) ?></p>
                            <p class="card-text"><small class="text-muted">Vistas: <?= htmlspecialchars($news['meta']['views'] ?? 0) ?> | Me gusta: <?= htmlspecialchars($news['meta']['likes'] ?? 0) ?> </small></p>
                            <a href="index.php?page=article&id=<?= htmlspecialchars($news['id_article']) ?>" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No hay noticias generales disponibles en este momento.</p>
        <?php endif; ?>
    </div>

    <!-- Sección de noticias de deportes -->
    <div class="row mb-4">
        <h2>Noticias de Deportes</h2>
        <?php if (isset($sportsNews) && is_array($sportsNews)): ?>
            <?php foreach ($sportsNews as $news): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= htmlspecialchars($news['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($news['title']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($news['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($news['excerpt']) ?></p>
                            <p class="card-text"><small class="text-muted">Vistas: <?= htmlspecialchars($news['meta']['views'] ?? 0) ?> | Me gusta: <?= htmlspecialchars($news['meta']['likes'] ?? 0) ?> </small></p>
                            <a href="index.php?page=article&id=<?= htmlspecialchars($news['id_article']) ?>" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay noticias de deportes disponibles en este momento.</p>
        <?php endif; ?>
    </div>

    <!-- Sección de noticias de negocios -->
    <div class="row mb-4">
        <h2>Noticias de Negocios</h2>
        <?php if (isset($businessNews) && is_array($businessNews)): ?>
            <?php foreach ($businessNews as $news): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= htmlspecialchars($news['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($news['title']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($news['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($news['excerpt']) ?></p>
                            <p class="card-text"><small class="text-muted">Vistas: <?= htmlspecialchars($news['meta']['views'] ?? 0) ?> | Me gusta: <?= htmlspecialchars($news['meta']['likes'] ?? 0) ?> </small></p>
                            <a href="index.php?page=article&id=<?= htmlspecialchars($news['id_article']) ?>" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay noticias de negocios disponibles en este momento.</p>
        <?php endif; ?>
    </div>

</div>
