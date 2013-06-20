<section>
    <h2>Galleries</h2>
    <?php echo anchor('admin/gallery/edit', '<i class="icon-plus"></i> Add a gallery'); ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nazwa</th>
            <th>Dodaj/Usuń zdjęcia</th>
            <th>Edytuj</th>
            <th>Usuń</th>
        </tr>
        </thead>
        <tbody>
        <?php if (count($galleries)): foreach($galleries as $gallery): ?>
            <tr>
                <td><?php echo anchor('admin/gallery/edit/' . $gallery->id, $gallery->name); ?></td>
                <td><?php echo btn_manager('admin/gallery/manager/' . $gallery->id, $gallery->name); ?></td>
                <td><?php echo btn_edit('admin/gallery/edit/' . $gallery->id); ?></td>
                <td><?php echo btn_delete('admin/gallery/delete/' . $gallery->id); ?></td>
            </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">We could not find any galleries.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</section>