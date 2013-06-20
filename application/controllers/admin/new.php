<?php

class Uploader extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('uploader_m');
        $this->data['error']= '';
    }

    function index() {

        //Load view
        $this->data['subview'] = 'admin/gallery/uploader';
        $this->load->view('admin/_layout_main', $this->data);
        dump($this->data);
    }

    function do_upload() {


        $id = $this->uri->segment(4);

        //foreach ($_FILES as $key => $value) {
            //if (!empty($key['name'])) {

                $config['upload_path'] = '.uploads/gallery/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '100';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                $this->load->library('upload', $config);


                if (!$this->upload->do_upload()) {
                    $data['error'] = $this->upload->display_errors();

                    $this->data['subview'] = 'admin/gallery/uploader';
                    $this->load->view('admin/_layout_main', $this->data);
                }
                else {
                    $this->image_lib->resize();
                    if (!$this->image_lib->resize()) {
                        $data['error'] = 'image ' . $data['file_name'] . ' resize error';

                        $this->data['subview'] = 'admin/gallery/uploader';
                        $this->load->view('admin/_layout_main', $this->data);
                    }
                    else {
                        $data = array(
                            'url' => UPLOAD_PATH . $data['file_name'],
                            'thumbnail_url' => UPLOAD_PATH . $data['file_name'] . $config['thumb_marker'] = '_thumb',
                            'order' => '0',
                            'gallery_id' => $id
                        );
                        $this->uploader_m->save($data);

                        dump($data);
                        echo '<pre>' . $this->db->last_query() . '</pre>';

                        $this->data['subview'] = 'admin/gallery/uploader';
                        $this->load->view('admin/_layout_main', $this->data);
                    }
                }
            //}

       // }

    }


}