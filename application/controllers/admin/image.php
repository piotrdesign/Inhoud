<?php

class Image extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function add_images() {

        // Upload files
        $this->config->load('image');
        $config = $this->config->item('upload');
        $this->load->library('upload', $config);
        $this->upload->do_multi_upload('files');

        // Make a thumbnails
        $files = $this->upload->get_multi_upload_data();
        $config = $this->config->item('thumbnails');

        foreach($files as $file) {
            $config['source_image'] = $config['source_image'] . $file['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $id = $this->uri->segment(4);

            $data = array(
                'url' => UPLOAD_PATH . $data['file_name'],
                'thumbnail_url' => UPLOAD_PATH . $data['file_name'] . $config['thumb_marker'] = '_thumb',
                'order' => '0',
                'gallery_id' => $id
            );
            dump($data);
            dump($this->data['error']);
            $this->uploader_m->save($data);
            echo '<pre>' . $this->db->last_query() . '</pre>';
        }


        //TODO Add to database

        //
        $this->data['subview'] = 'admin/gallery/images';
        $this->load->view('admin/_layout_main', $this->data);
    }
}
