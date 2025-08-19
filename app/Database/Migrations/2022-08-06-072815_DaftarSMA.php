<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarSMA extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_SMA' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_SMA' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_kabupaten' => [
                'type'           => 'INT', 
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_SMA', true);
        $this->forge->addForeignKey(
            'id_kabupaten',          // kolom di tabel biodata
            'daftarkabupaten',             // refer ke tabel ini
            'id_kabupaten',          // refer ke kolom ini
            'CASCADE',                   // ON DELETE
            'CASCADE'                    // ON UPDATE
        );
        $this->forge->createTable('daftarSMA');
    }

    public function down()
    {
        $this->forge->dropTable('daftarSMA');
    }
}
