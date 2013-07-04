<!-- Main content -->
<div class="span9">
    <article>
        <h2><?php echo 'galeria ' . e($page->title); ?></h2>
        <?php echo $page->body; ?>
        <?php echo show_images($gallery); ?>
    </article>
</div>
