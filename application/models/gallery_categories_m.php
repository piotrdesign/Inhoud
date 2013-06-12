<?php
class Gallery_categories_m extends IH_Model {

    protected $_table_name = 'gallery-categories';
    protected $_order_by = 'order';
    protected $_timestamps = TRUE;
    public $_rules = array(
        'name' => array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|max_lenght[100]|xss_clean'
        )
    );

    public function get_new(){
        $gallery_categories = new stdClass();
        $gallery_categories->name = '';
        return $gallery_categories;

    }
}