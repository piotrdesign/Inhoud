<h2>Ostatnio modyfikowane artykuły:</h2>

<?php if(count($recent_articles)) : ?>
<ul>
    <?php foreach($recent_articles as $article) : ?>
    <li><?php echo anchor('admin/article/edit/' . $article->id, e($article->title)); ?> - <?php echo date('d-m-Y', strtotime(e($article->modified))); ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>