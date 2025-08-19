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
                'type'           => 'INT', 
                'unsigned'       => true,
            ],
            'id_daftarprodi' => [
                'type'       => 'INT', 
                'unsigned'       => true,
            ],
            'id_jalurmasuk' => [
                'type'       => 'INT', 
                'unsigned'       => true,
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
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id_siswa', true);

        $this->forge->addForeignKey(
            'id_daftaruniversitas',          // kolom di tabel biodata
            'daftaruniversitas',             // refer ke tabel ini
            'id_daftaruniversitas',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->addForeignKey(
            'id_daftarprodi',          // kolom di tabel biodata
            'daftarprodi',             // refer ke tabel ini
            'id_daftarprodi',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->addForeignKey(
            'id_jalurmasuk',          // kolom di tabel biodata
            'daftarjalurmasuk',             // refer ke tabel ini
            'id_jalurmasuk',          // refer ke kolom ini
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
        $this->forge->createTable('universitas');
    }

    public function down()
    {
        $this->forge->dropTable('universitas');
    }
}
