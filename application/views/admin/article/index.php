<section>
    <h2>Artykuły</h2>
    <?php echo anchor('admin/article/edit', '<i class="icon-plus"></i> dodaj artykuł'); ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tytył</th>
                <th>Data publikacji</th>
                <th>Edytuj</th>
                <th>Usuń</th>
            </tr>
        </thead>
        <tbody>
        <?php if (count($articles)): foreach($articles as $article): ?>
            <tr>
                <td><?php echo anchor('admin/article/edit/' . $article->id, $article->title); ?></td>
                <td><?php echo $article->pubdate; ?></td>
                <td><?php echo btn_edit('admin/article/edit/' . $article->id); ?></td>
                <td><?php echo btn_delete('admin/article/delete/' . $article->id); ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">uuu... w bazie nie mamy żadnych artykułów. Dodaj jakiś!</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</section>