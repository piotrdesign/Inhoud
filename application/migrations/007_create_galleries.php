<?php
class Migration_Create_galleries extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'order' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'created' => array(
                'type' => 'DATETIME',
            ),
            'modified' => array(
                'type' => 'DATETIME',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('galleries');
    }

    public function down()
    {
        $this->dbforge->drop_table('galleries');
    }
}