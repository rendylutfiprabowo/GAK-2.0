<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PendampingPKH extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pendampingpkh' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pendamping_pkh' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_tel' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_kabupaten' => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'id_kabupaten' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id_pendampingpkh', true);
        $this->forge->addForeignKey('id_kabupaten', 'kabupaten', 'id_kabupaten', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pendampingpkh');
    }

    public function down()
    {
        $this->forge->dropTable('pendampingpkh');
    }
}
