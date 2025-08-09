<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JalurMasuk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jalurmasuk' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_jalurmasuk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_jalurmasuk', true);
        $this->forge->createTable('jalurmasuk');
    }

    public function down()
    {
        $this->forge->dropTable('jalurmasuk');
    }
}
