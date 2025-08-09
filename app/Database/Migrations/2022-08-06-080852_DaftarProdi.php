<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarProdi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_daftarprodi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_daftarprodi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_daftarprodi', true);
        $this->forge->createTable('daftarprodi');
    }

    public function down()
    {
        $this->forge->dropTable('daftarprodi');
    }
}
