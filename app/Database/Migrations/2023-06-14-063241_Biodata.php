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
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_pkh' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_pendamping' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'asal_wilayah' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'asal_sekolah' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_ibu' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'no_whatshap' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],

        ]);
        $this->forge->addKey('id_siswa', true);
        $this->forge->createTable('biodata');
    }

    public function down()
    {
        $this->forge->dropTable('biodata');
    }
}
