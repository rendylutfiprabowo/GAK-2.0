<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Upload extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswafoto' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sktm' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ktp_ortu' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'sk_pendapatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'dokumen' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_siswafoto', true);
        $this->forge->createTable('upload');
    }

    public function down()
    {
        $this->forge->dropTable('upload');
    }
}
