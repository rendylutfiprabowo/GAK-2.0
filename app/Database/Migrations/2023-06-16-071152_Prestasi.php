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
                'unsigned'       => true,
            ],
            'user_id' => [
                'type' => 'INT', 
                'unsigned' => true,
            ],

        ]);
        $this->forge->addKey('id_prestasisiswa', true);
        $this->forge->addForeignKey(
            'id_siswa',          // kolom di tabel biodata
            'biodata',             // refer ke tabel ini
            'id_siswa',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->addForeignKey(
            'user_id',          // kolom di tabel biodata
            'user',             // refer ke tabel ini
            'user_id',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->createTable('prestasi');
    }

    public function down()
    {
        $this->forge->dropTable('prestasi');
    }
}
