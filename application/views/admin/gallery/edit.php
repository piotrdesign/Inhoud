<h3><?php echo empty($gallery->id) ? 'Dodaj nową galerię' : 'Edytuj galerię: ' . $gallery->name; ?></h3>
<?php echo validation_errors()?>
<?php echo form_open(); ?>
<table class="table">
    <tr>
        <td>Nazwa:</td>
        <td><?php echo form_input('name', set_value('name', $gallery->name)); ?></td>
    </tr>
    <tr>
        <td>Opis:</td>
        <td><?php echo form_textarea('description', set_value('description', $gallery->description)); ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('submit', 'Zapisz', 'class="btn btn-primary"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>