<?php

function thumb($files) {

    // Get the CodeIgniter super object
    $CI = &get_instance();

    // Load the configuration file
    $CI->config->load('image');
    $config = $CI->config->item('thumbnails');
    dump($config);

    foreach ($files as $key => $file) {
        $config['thumbnails']['source_image'] = $config['thumbnails']['source_image'] . $file['file_name'];
        //Resize the file
        $CI->load->library('image_lib', $config);
        $CI->image_lib->resize();

    }

}
