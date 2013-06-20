<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset='utf-8'>
    <title><?php echo $meta_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('css/admin.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
    <?php if(isset($sortable) && $sortable === TRUE) : ?>
        <script src="<?php echo base_url('js/jquery-ui-1.10.3.custom.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/jquery.mjs.nestedSortable.js'); ?>"></script>
    <?php endif; ?>
    <script type="text/javascript" src="<?php echo base_url('js/tinymce/tinymce.min.js'); ?>"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea.tinymce"
        });
    </script>
</head>