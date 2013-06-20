<h3><?php echo 'Edit gallery '  ?></h3>
<?php echo $error; ?>
<?php echo form_open_multipart(); ?>
<table class="table">
    <tr>
        <td>Wybierz pliki:</td>
        <td><?php echo form_upload('userfile','', 'multiple'); ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('submit', 'Upload', 'class="btn btn-primary"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>