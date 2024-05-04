<div class="container">
    <nav class="py-2 bg-body-tertiary border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="<?php echo BASE_URL; ?>/index.php?page=contacto" class="nav-link link-body-emphasis px-2">Contacto</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Avisos Económicos</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Trabaja con nosotros</a></li>
            </ul>
            <ul class="nav">
                <?php if (isset($_SESSION['username'])) : ?>
                    <li class="nav-item"><span class="nav-link px-2">Sucriptor: <?= htmlspecialchars($_SESSION['username']) ?></span></li>
                    <li class="nav-item"><a href="<?php echo BASE_URL; ?>/index.php?page=logout" class="nav-link link-body-emphasis px-2">Logout</a></li>
                <?php else : ?>
                    <li class="nav-item"><a href="<?php echo BASE_URL; ?>/index.php?page=login" class="nav-link link-body-emphasis px-2">Ingresar</a></li>
                    <li class="nav-item"><a href="<?php echo BASE_URL; ?>/index.php?page=register" class="nav-link link-body-emphasis px-2">Registrarse</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <header class="d-flex flex-wrap justify-content-center align-items-center py-3 mb-4 border-bottom">
        <a href="<?php echo BASE_URL; ?>/index.php?page=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <div class="d-flex align-items-center">
                <img class="logo" src="assets/elfaro_vectorized_trans.png" alt="Logo de El Faro" />
                <div class="d-flex align-items-center flex-column">
                    <span class="logo fs-1">El Faro</span>
                    <p class="small text-center"><em>Noticias que importan</em></p>
                </div>
            </div>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="<?php echo BASE_URL; ?>/index.php?page=home" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Deportes</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Negocios</a></li>
        </ul>
    </header>
</div>