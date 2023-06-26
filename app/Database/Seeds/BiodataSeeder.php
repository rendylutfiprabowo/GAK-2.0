<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email_address' => 'admin@gmail.com',
            'nama' => 'admin',
            'no_pkh' => '123',
            'nama_pendamping' => 'admin',
            'asal_wilayah' => 'admin',
            'asal_sekolah' => 'admin',
            'nama_ibu' => 'admin',
            'no_whatshap' => 0,
            'user_id' => 1,
        ];
        $this->db->table('biodata')->insertBatch($data);
    }
}
								
