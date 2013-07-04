<section>
    <h2>Strony</h2>
    <?php echo anchor('admin/page/edit', '<i class="icon-plus"></i> dodaj stronę'); ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tytuł</th>
                <th>Rodzic</th>
                <th>Edytuj</th>
                <th>Usuń</th>
            </tr>
        </thead>
        <tbody>
        <?php if (count($pages)): foreach($pages as $page): ?>
            <tr>
                <td><?php echo anchor('admin/page/edit/' . $page->id, $page->title); ?></td>
                <td><?php echo $page->parent_slug; ?></td>
                <td><?php echo btn_edit('admin/page/edit/' . $page->id); ?></td>
                <td><?php echo btn_delete('admin/page/delete/' . $page->id); ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Nie mogliśmy znaleźć żadnej strony. Dodaj jakąś!</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</section>