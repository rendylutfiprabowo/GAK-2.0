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
            'id_daftaruniversitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_daftarprodi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_jalurmasuk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun_masuk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kip_sma' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'default'    => '0',
            ],
            'kip_kuliah' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'default'    => '0',
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
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
