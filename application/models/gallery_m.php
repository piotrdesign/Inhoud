<?php
class Gallery_m extends IH_Model {

    protected $_table_name = 'galleries';
    protected $_order_by = 'id';
    protected $_timestamps = TRUE;
    public $_rules = array(
        'name' => array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|max_lenght[100]|xss_clean'
        ),
        'description' => array(
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'trim|max_lenght[255]|xss_clean'
        )
    );

    public function get_new(){
        $gallery = new stdClass();
        $gallery->name = '';
        $gallery->description = '';
        return $gallery;
    }
}