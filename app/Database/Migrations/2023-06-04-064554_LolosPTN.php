<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LolosPTN extends Migration
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
            'no_whatshap' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'provinsi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kabupaten_kota' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kecamatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'desa' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'asal_sekolah' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'no_pkh' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'jalur_masukptn' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'universitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'program_studi' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],
            'status_kip' => [
                'type'       => 'VARCHAR',
                'constraint' => '225',
            ],

        ]);
        $this->forge->addKey('id_siswa', true);
        $this->forge->createTable('lolosptn');
    }

    public function down()
    {
        $this->forge->dropTable('lolosptn');
    }
}
