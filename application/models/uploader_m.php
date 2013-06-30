<?php
class Uploader_m extends IH_Model {

    protected $_table_name = 'images';
    protected $_order_by = 'order asc, id asc';

    public function save_order ($images) {
        if (count($images)) {
            foreach ($images as $order => $image) {
                if ($image['item_id'] != '') {
                   // $data = array('gallery_id' => (int) $image['parent_id'], 'order' => $order);
                    $this->db->set('order', $order)->where($this->_primary_key, $image['item_id'])->update($this->_table_name);
                }
            }
        }
    }

    public function get_images ($id) {
        $this->db->order_by($this->_order_by);
        $this->db->where('gallery_id', $id);
        $images = $this->db->get('images')->result_array();
        return $images;
    }

}

