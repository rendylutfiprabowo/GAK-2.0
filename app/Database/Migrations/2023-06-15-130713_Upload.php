<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Upload extends Migration
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
            'sktm' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'ktp_ortu' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'sk_pendapatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'dokumen' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'user_id' => [
                'type' => 'INT', 
                'unsigned' => true,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_siswa', true);
        $this->forge->addForeignKey(
            'user_id',          // kolom di tabel biodata
            'user',             // refer ke tabel ini
            'user_id',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->createTable('upload');
    }

    public function down()
    {
        $this->forge->dropTable('upload');
    }
}
