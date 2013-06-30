<?php



    $config['upload'] = array(
        'upload_path'     => './uploads/gallery/',
        'allowed_types'   => 'gif|jpg|png',
        'max_size'        => '100',
        'max_width'       => '1024',
        'max_height'      => '768'
    );

    $config['resize'] = array(
        'image_library'   => 'gd2',
        'maintain_ratio'  => TRUE,
        'width'           => '800',
        'height'          => '600',
        'create_thumb'    => FALSE
    );

    $config['thumbnails'] = array(
        'image_library'   => 'gd2',
        'create_thumb'    => TRUE,
        'thumb_marker'    => '_thumb',
        'maintain_ratio'  => TRUE,
        'width'           => '260',
        'height'          => '180',
        'new_image'       =>'uploads/gallery/thumbs/'
    );
