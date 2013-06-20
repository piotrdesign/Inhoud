<?php

    $config['upload'] = array(
        'upload_path'     => './uploads/gallery/',
        'allowed_types'   => 'gif|jpg|png',
        'max_size'        => '100',
        'max_width'       => '1024',
        'max_height'      => '768'
    );

    $config['thumbnails'] = array(
        'image_library'   => 'gd2',
        'create_thumb'    => TRUE,
        'thumb_marker'    => '_thumb',
        'maintain_ratio'  => TRUE,
        'width'           => '75',
        'height'          => '50',
        'source_image'    => './uploads/gallery/',
        'new_image'       =>'uploads/gallery/thumbs/'
    );
