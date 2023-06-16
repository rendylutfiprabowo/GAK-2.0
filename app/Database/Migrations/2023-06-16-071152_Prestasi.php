<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prestasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswaprestasi' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_prestasi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'upload_prestasi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_siswaprestasi', true);
        $this->forge->createTable('prestasi');
    }

    public function down()
    {
        $this->forge->dropTable('prestasi');
    }
}
