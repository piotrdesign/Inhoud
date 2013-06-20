<?php

class Uploader extends Admin_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('uploader_m');
        $this->data['error']= '';
    }

    function index()
    {
        //Fetch all photos
        //$this->data['images'] = $this->uploader_m->get($id, TRUE);

        //Load view
        $this->data['subview'] = 'admin/gallery/uploader';
        $this->load->view('admin/_layout_main', $this->data);
        dump($this->data);
    }

    function do_upload()
    {
       foreach ($_FILES as $key => $value){
        if (!empty($key['name'])) {
        define('UPLOAD_PATH', 'uploads/gallery/');

        $config['upload_path'] = UPLOAD_PATH;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';




        $this->load->library('upload', $config);

        // Show errors

        if ( ! $this->upload->do_upload($key) )
        {
            $this->data['error'] = $this->upload->display_errors();
        }

        else
        {
            $data =  $this->upload->data();
            dump($data);
            // Resize, thumbnail

            $config['source_image']	= UPLOAD_PATH . $data['file_name'];
            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            // Resize, thumbnail - show errors
            if ( ! $this->image_lib->resize() ) {
                $this->data['error'] = 'image' . $data['file_name'] . 'resize error';
            }

            // Write to database
            else {
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
        }
        }
        $this->data['subview'] = 'admin/gallery/uploader';
        $this->load->view('admin/_layout_main', $this->data);
    }
    }
}