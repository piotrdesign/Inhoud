<?php

class Gallery extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('gallery_m');
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


}
