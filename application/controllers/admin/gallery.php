<?php

class Gallery extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('gallery_m');
        $this->load->model('uploader_m');
    }

    public function index(){
        //Fetch all galleries
        $this->data['galleries'] = $this->gallery_m->get();

        //Load view
        $this->data['subview'] = 'admin/gallery/index';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit($id = NULL){

        //Fetch a gallery or set a new one
        if ($id) {
            $this->data['gallery'] = $this->gallery_m->get($id);
            if(!count($this->data['gallery']))  $this->data['errors'][] = 'gallery could not be found';
        }

        else {
            $this->data['gallery'] = $this->gallery_m->get_new();
        }

        //Set up the form
        $rules = $this->gallery_m->_rules;
        $this->form_validation->set_rules($rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {
            $data = $this->gallery_m->array_from_post(array(
                'name',
                'description',
            ));
            $this->gallery_m->save($data, $id);
            redirect('admin/gallery');
        }

        //Load the view
        $this->data['subview'] = 'admin/gallery/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function delete($id){
        $this->gallery_m->delete($id);
        redirect('admin/gallery');
    }


    // Images manager

    public function add_images($id) {

        // TODO add exceptions

        //Load libraries
        $this->load->library('upload');
        $this->load->library('image_lib');

        //Load settings
        $this->config->load('image');
        $config_upload = $this->config->item('upload');
        $config_resize = $this->config->item('resize');
        $config_thumbs = $this->config->item('thumbnails');

        // Upload files
        $this->upload->initialize($config_upload);
        $this->upload->do_multi_upload('files');

        // Prepare for new images
        $files = $this->upload->get_multi_upload_data();
        $source = $config_upload['upload_path'];

        foreach($files as $file) {

            // Resize orginal image
            if( $file['image_width'] > $config_resize['width'] || $file['image_height'] > $config_resize['height'] ) {

                $config_resize['source_image'] = $source . $file['file_name'];
                $this->image_lib->initialize($config_resize);
                $this->image_lib->resize();
                $this->image_lib->clear();
            }

            // Create thumbnails
            $config_thumbs['source_image'] = $source . $file['file_name'];
            $this->image_lib->initialize($config_thumbs);
            $this->image_lib->resize();
            $this->image_lib->clear();

            // Add to database
            $data = array(
                'url' => $source . $file['file_name'],
                'thumbnail_url' => $config_thumbs['new_image'] . $file['raw_name'] . $config_thumbs['thumb_marker'] . $file['file_ext'],
                'order' => '0',
                'gallery_id' => $id
            );

            $this->uploader_m->save($data);
        }

        // Load the view
        $this->data['gallery_id'] = $id;
        $this->data['sortable'] = TRUE;
        $this->data['subview'] = 'admin/gallery/images';
        $this->load->view('admin/_layout_main', $this->data);

    }

    public function order_ajax() {
        // Load gallery id
        $this->data['gallery_id'] = $this->uri->segment(4);

        // Save order from ajax call
        if (isset($_POST['sortable'])) {
            $this->uploader_m->save_order($_POST['sortable']);
        }

        // Fetch all pages
        $this->data['images'] = $this->uploader_m->get_images($this->data['gallery_id']);

        // Load view

        $this->load->view('admin/gallery/order_ajax', $this->data);
    }

    public function delete_image($gallery_id, $id) {
        $this->uploader_m->delete($id);
        redirect('admin/gallery/manager/' . $gallery_id);

    }

}
