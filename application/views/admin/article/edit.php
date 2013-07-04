<h3><?php echo empty($article->id) ? 'Dodaj nowy artykuł' : 'Edytuj artykuł: ' . $article->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
    <tr>
        <td>Data publikacji</td>
        <td><?php echo form_input('pubdate', set_value('pubdate', $article->pubdate), 'class="datepicker"'); ?></td>
    </tr>
    <tr>
        <td>Tytuł</td>
        <td><?php echo form_input('title', set_value('title', $article->title)); ?></td>
    </tr>
    <tr>
        <td>Slug</td>
        <td><?php echo form_input('slug', set_value('slug', $article->slug)); ?></td>
    </tr>
    <tr>
        <td>Treść</td>
        <td><?php echo form_textarea('body', set_value('body', $article->body), 'class="tinymce"'); ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('submit', 'Zapisz', 'class="btn btn-primary"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>

<script>
$(function() {
    $('.datepicker').datepicker({
        format : 'yyyy-mm-dd'
    });
});
</script>