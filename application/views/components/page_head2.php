<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/reset.css'); ?>" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>" media="all">
    <link rel="stylesheet" href="<?php echo base_url('css/nivo-slider.css'); ?>" type="text/css" media="screen" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('js/jquery.nivo.slider.pack.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('css/jquery.fancybox.css'); ?>" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo base_url('js/jquery.fancybox.pack.js'); ?>"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
                slices: 1, // For slice animations
                animSpeed: 1000, // Slide transition speed
                pauseTime: 5000, // How long each slide will show
                directionNav: false, // Next &amp; Prev navigation
                controlNav: false, // 1,2,3... navigation
                controlNavThumbs: false, // Use thumbnails for Control Nav
                pauseOnHover: false, // Stop animation while hovering
                manualAdvance: false // Force manual transitions
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox(
                {
                    helpers : {
                        title : {
                            type : 'outside'
                        }
                    }
                }
            );
        });
    </script>
</head>