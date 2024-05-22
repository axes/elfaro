<!-- /app/Views/admin/article_form.php -->
<div class="container mt-4">
    <h2><?= $isEdit ? 'Editar Artículo' : 'Crear Nuevo Artículo' ?></h2>
    <form action="<?php echo BASE_URL; ?>/index.php?page=admin&action=<?= $isEdit ? 'update&id=' . $article['id_article'] : 'store' ?>" method="POST">
        <div class="form-group mb-3">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $isEdit ? htmlspecialchars($article['title']) : '' ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="image">Imagen (<small>Usar: images/default_article.jpg</small>)</label>
            <input type="text" class="form-control" id="image" name="image" value="<?= $isEdit ? htmlspecialchars($article['image']) : '' ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="excerpt">Extracto</label>
            <textarea class="form-control" id="excerpt" name="excerpt" required><?= $isEdit ? htmlspecialchars($article['excerpt']) : '' ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="content">Contenido</label>
            <textarea class="form-control" id="content" name="content" required><?= $isEdit ? htmlspecialchars($article['content']) : '' ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="category">Categoría</label>
            <input type="text" class="form-control" id="category" name="category" value="<?= $isEdit ? htmlspecialchars($article['category']) : '' ?>" required>
        </div>
        <div class="form-group mb-3">
            <label for="date">Fecha</label>
            <input type="date" class="form-control" id="date" name="date" value="<?= $isEdit ? htmlspecialchars($article['date']) : '' ?>" required>
        </div>
        <button type="submit" class="btn btn-primary"><?= $isEdit ? 'Actualizar' : 'Crear' ?></button>
    </form>
</div>
