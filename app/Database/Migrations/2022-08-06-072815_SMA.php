<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SMA extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_SMA' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_SMA' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_kabupaten' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_SMA', true);
        $this->forge->createTable('SMA');
    }

    public function down()
    {
        $this->forge->dropTable('SMA');
    }
}
