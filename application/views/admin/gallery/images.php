<h3><?php echo 'Dodaj zdjęcia do galerii '  ?></h3>

<?php echo form_open_multipart(); ?>
<p class="alert alert-info">Możesz wybrać kilka plików naraz używając klawisza CTRL lub SHIFT</p>
<table class="table">
    <tr>
        <td>Wybierz pliki:</td>
        <td><?php echo form_upload('files[]','', 'multiple'); ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('submit', 'Wyślij', 'class="btn btn-primary"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>

<section>
    <h3>Kolejność zdjęć</h3>
    <p class="alert alert-info">Chwyć zdjęcie i przesuń w odpowiednie miejsce. Po tej czynności wybierz "Zapisz"</p>
    <div id="orderResult"></div>
    <input type="button" id="save" value="Zapisz" class="btn btn-primary" />
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