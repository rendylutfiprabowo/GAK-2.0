<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prestasi extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_prestasisiswa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_prestasi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tingkat_prestasi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun_prestasi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'sertifikat_prestasi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'NULL' => true,
            ],
            'id_siswa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

        ]);
        $this->forge->addKey('id_prestasisiswa', true);
        $this->forge->createTable('prestasi');
    }

    public function down()
    {
        $this->forge->dropTable('prestasi');
    }
}
