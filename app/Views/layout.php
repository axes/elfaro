<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>El Faro</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/vendors/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="<?php echo BASE_URL; ?>/vendors/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css">
</head>

<body>
    <?php include 'partes/header.php'; ?>

    <?php echo $content; ?>  <!-- Asegúrate de que esta línea sea la única que imprime $content -->

    <?php include 'partes/footer.php'; ?>
</body>

</html>