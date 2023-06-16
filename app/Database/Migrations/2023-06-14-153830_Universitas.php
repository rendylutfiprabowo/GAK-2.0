<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Universitas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'universitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'program_studi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun_masuk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_siswa', true);
        $this->forge->createTable('universitas');
    }

    public function down()
    {
        $this->forge->dropTable('universitas');
    }
}
