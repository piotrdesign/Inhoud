<h3><?php echo empty($page->id) ? 'Dodaj nową stronę' : 'Edytuj stronę: ' . $page->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
    <tr>
        <td>Rodzic</td>
        <td><?php echo form_dropdown('parent_id', $pages_no_parents, $this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id); ?></td>
    </tr>
    <tr>
        <td>Szablon</td>
        <td><?php echo form_dropdown('template', array('page' => 'Strona', 'news_archive' => 'Aktualności', 'homepage' => 'Strona główna', 'gallery' => "Galeria"), $this->input->post('template') ? $this->input->post('template') : $page->template); ?></td>
    </tr>
    <tr class="page_galleries" style="display: none;">
        <td>Wybierz galerię:</td>
        <td><?php foreach($galleries as $gallery) { echo form_label(form_checkbox('galleries_id[]', $gallery->id, is_array($page->galleries_id) ? in_array($gallery->id, $page->galleries_id) : FALSE, 'id=' . $gallery->id ) . ' ' . $gallery->name, $gallery->id, array('class' => 'checkbox') ); } ?></td>
    </tr>
    <tr>
        <td>Tytuł</td>
        <td><?php echo form_input('title', set_value('title', $page->title)); ?></td>
    </tr>
    <tr>
        <td>Slug</td>
        <td><?php echo form_input('slug', set_value('slug', $page->slug)); ?></td>
    </tr>
    <tr>
        <td>Treść</td>
        <td><?php echo form_textarea('body', set_value('body', $page->body), 'class="tinymce"'); ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>

<script>
    $("select").change(function(evt) {
        var selected;
        selected = $(this).val();
        if (selected === "gallery") {
            return $(".page_galleries").fadeIn();
        } else {
            return $(".page_galleries").fadeOut();
        }
    }).change();
</script>

