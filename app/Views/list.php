<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>Título</th>
            <th class="text-center">Opciones</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($object_list as $object): ?>
        <tr>
            <td>
                <?= esc($object['title']) ?>
            </td>
            <td class="text-center">
                <button type="button" class="btn btn-sm btn-secondary" hx-delete="/htmx/delete/<?= esc($object['id']) ?>" hx-confirm="Eliminar registro?" hx-swap="delete" hx-target="this">Eliminar</button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>