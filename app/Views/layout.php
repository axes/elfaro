<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro</title>

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/vendors/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="<?php echo BASE_URL; ?>/vendors/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css">
</head>

<body>
    <?php include ROOT_PATH . '/app/Views/partes/header.php'; ?>

    <main class="container">
        <?php echo $content; ?>
    </main>

    <?php include ROOT_PATH . '/app/Views/partes/footer.php'; ?>
</body>

</html>