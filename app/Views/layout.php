<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>El Faro</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/vendors/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="<?php echo BASE_URL; ?>/vendors/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Estilos personales -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/styles.css">
</head>

<body>
    <?php include 'partes/header.php'; ?>

    <?php echo $content; ?>

    <?php include 'partes/footer.php'; ?>

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- JS para Registro  -->
    <script src="<?php echo BASE_URL; ?>/js/registro.js"></script>

</body>

</html>