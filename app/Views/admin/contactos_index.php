<!-- contactos_index.php -->
<div class="container">
    <h2>Gestionar Contactos</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Tipo</th>
                <th>Fecha Enviado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?= htmlspecialchars($contact['id_contacto']) ?></td>
                    <td><?= htmlspecialchars($contact['name']) ?></td>
                    <td><?= htmlspecialchars($contact['email']) ?></td>
                    <td><?= htmlspecialchars($contact['message']) ?></td>
                    <td><?= htmlspecialchars($contact['type']) ?></td>
                    <td><?= htmlspecialchars($contact['date_sent']) ?></td>
                    <td>
                        <a href="index.php?page=admin&action=deleteContact&id=<?= $contact['id_contacto'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este contacto?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
