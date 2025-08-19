<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarDesa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_desa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_desa' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_kecamatan' => [
                'type'           => 'INT', 
                'unsigned'       => true,
            ],
            'id_kabupaten' => [
                'type'           => 'INT', 
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_desa', true);
        $this->forge->addForeignKey(
            'id_kabupaten',          // kolom di tabel biodata
            'daftarkabupaten',             // refer ke tabel ini
            'id_kabupaten',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->addForeignKey(
            'id_kecamatan',          // kolom di tabel biodata
            'daftarkecamatan',             // refer ke tabel ini
            'id_kecamatan',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->createTable('daftardesa');
    }

    public function down()
    {
        $this->forge->dropTable('daftardesa');
    }
}
