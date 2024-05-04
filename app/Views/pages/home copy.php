<!-- home.php en /app/Views/pages -->

<div class="container mt-4">
    <!-- Sección de avisos económicos -->


    <!-- Sección de noticias generales -->
    <div class="row mb-4">
        <h2>Noticias Generales</h2>
        <?php foreach (array_slice($general_news, 0, 3) as $news): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= htmlspecialchars($news['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($news['title']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($news['title']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($news['excerpt']) ?></p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Sección de video destacado -->
    <div class="row mb-4">
        <h2>Video Destacado</h2>
        <div class="col">
            <!-- Insertar elemento de video aquí -->
        </div>
    </div>

    <!-- Sección de audio destacado -->
    <div class="row mb-4">
        <h2>Audio Destacado</h2>
        <div class="col">
            <!-- Insertar elemento de audio aquí -->
        </div>
    </div>

    <!-- Sección de noticias de deportes -->
    <div class="row mb-4">
        <h2>Noticias de Deportes</h2>
        <?php foreach (array_slice($sports_news, 0, 3) as $sports): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= htmlspecialchars($sports['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($sports['title']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($sports['title']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($sports['excerpt']) ?></p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Sección de noticias de negocios -->
    <div class="row">
        <h2>Noticias de Negocios</h2>
        <?php foreach (array_slice($business_news, 0, 3) as $business): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= htmlspecialchars($business['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($business['title']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($business['title']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($business['excerpt']) ?></p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

