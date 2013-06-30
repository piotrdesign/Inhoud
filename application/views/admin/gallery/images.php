<h3><?php echo 'Edit gallery '  ?></h3>

<?php echo form_open_multipart(); ?>
<table class="table">
    <tr>
        <td>Wybierz pliki:</td>
        <td><?php echo form_upload('files[]','', 'multiple'); ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('submit', 'Upload', 'class="btn btn-primary"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>

<section>
    <h3>Order images</h3>
    <p class="alert alert-info">Drag to order images and then click "Save"</p>
    <div id="orderResult"></div>
    <input type="button" id="save" value="Save" class="btn btn-primary" />
</section>

<script>
    $(function() {
        $.post('<?php echo site_url('admin/gallery/order_ajax/' . $gallery_id); ?>', {}, function(data){
            $('#orderResult').html(data);
        });
        $('#save').click(function(){
            oSortable = $('.thumbnails').nestedSortable('toArray');

            $('#orderResult').slideUp(function(){
                $.post('<?php echo site_url('admin/gallery/order_ajax/' . $gallery_id); ?>', { sortable: oSortable }, function(data){
                    $('#orderResult').html(data);
                    $('#orderResult').slideDown();
                });
            });

        });
    });
</script>