<!-- Main content -->
<div class="span9">
    <article>
        <h2><?php echo e($article->title); ?></h2>

        <p class="pubdate"><?php echo e($article->pubdate); ?></p>
        <?php echo $article->body ?>
    </article>
</div>

