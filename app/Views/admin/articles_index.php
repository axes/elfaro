<!-- /app/Views/admin/articles_index.php -->
<div class="container mt-4">
    <h2>Gestión de Artículos</h2>
    <a href="<?php echo BASE_URL; ?>/index.php?page=admin&action=create" class="btn btn-primary mb-3">Crear Nuevo Artículo</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Categoría</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= htmlspecialchars($article['title']) ?></td>
                    <td><?= htmlspecialchars($article['category']) ?></td>
                    <td><?= htmlspecialchars($article['date']) ?></td>
                    <td>
                        <a href="<?php echo BASE_URL; ?>/index.php?page=admin&action=edit&id=<?= $article['id_article'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="<?php echo BASE_URL; ?>/index.php?page=admin&action=delete&id=<?= $article['id_article'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este artículo?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
