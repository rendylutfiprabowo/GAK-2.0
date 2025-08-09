<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Biodata extends Migration
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
            'email_address' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'           => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'           => true,
            ],
            'no_pkh' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'           => true,
            ],
            'id_pendampingpkh' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true, // jika boleh kosong
            ],
            'id_kabupaten' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'id_kecamatan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'id_desa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'id_SMA' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'nama_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
                'null'           => true,
            ],
            'no_whatshap' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
                'null'           => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

        ]);
        $this->forge->addKey('id_siswa', true);
        // $this->forge->addForeignKey('user_id', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey(
            'id_pendampingpkh',          // kolom di tabel biodata
            'pendampingpkh',             // refer ke tabel ini
            'id_pendampingpkh',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->addForeignKey(
            'id_kabupaten',          // kolom di tabel biodata
            'kabupaten',             // refer ke tabel ini
            'id_kabupaten',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->addForeignKey(
            'id_kecamatan',          // kolom di tabel biodata
            'kecamatan',             // refer ke tabel ini
            'id_kecamatan',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->addForeignKey(
            'id_desa',          // kolom di tabel biodata
            'desa',             // refer ke tabel ini
            'id_desa',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->addForeignKey(
            'id_SMA',          // kolom di tabel biodata
            'sma',             // refer ke tabel ini
            'id_SMA',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->createTable('biodata');
    }

    public function down()
    {
        $this->forge->dropTable('biodata');
    }
}
