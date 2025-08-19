<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarKabupaten extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kabupaten' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kabupaten' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id_kabupaten', true);
        $this->forge->createTable('daftarkabupaten');
    }

    public function down()
    {
        $this->forge->dropTable('daftarkabupaten');
    }
}
