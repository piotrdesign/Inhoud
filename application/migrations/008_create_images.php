<?php
class Migration_Create_images extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => '250',
            ),
            'thumbnail_url' => array(
                'type' => 'VARCHAR',
                'constraint' => '250',
            ),
            'order' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'gallery_id' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),

        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('images');
    }

    public function down()
    {
        $this->dbforge->drop_table('images');
    }
}