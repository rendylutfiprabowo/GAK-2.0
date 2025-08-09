<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarUniversitas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_daftaruniversitas' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_daftaruniversitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_daftaruniversitas', true);
        $this->forge->createTable('daftaruniversitas');
    }

    public function down()
    {
        $this->forge->dropTable('daftaruniversitas');
    }
}
