<section>
    <h2>Galleries</h2>
    <?php echo anchor('admin/gallery/edit', '<i class="icon-plus"></i> Add a gallery'); ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Last modified</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php if (count($categories)): foreach($categories as $category): ?>
            <tr>
                <td><?php echo anchor('admin/gallery/edit/' . $category->id, $category->name); ?></td>
                <td><?php echo $category->modified; ?></td>
                <td><?php echo btn_edit('admin/gallery/edit/' . $category->id); ?></td>
                <td><?php echo btn_delete('admin/gallery/delete/' . $category->id); ?></td>
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