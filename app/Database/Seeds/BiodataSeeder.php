<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // [
            //     'email_address' => 'admin@gmail.com',
            //     'nama' => 'admin',
            //     'no_pkh' => '123',
            //     'id_pendampingpkh' => '1',
            //     'id_kabupaten' => '1',
            //     'id_kecamatan' => '1',
            //     'id_desa' => '1',
            //     'id_SMA' => '1',
            //     'nama_ibu' => 'admin',
            //     'no_whatshap' => 0,
            //     'user_id' => 1,
            // ],
            // [
            //     'id_siswa' => '1',
            //     'email_address' => 'neo@gmail.com',
            //     'nama' => 'neo',
            //     'no_pkh' => '81263781249',
            //     'id_pendampingpkh' => '1',
            //     'id_kabupaten' => '14',
            //     'id_kecamatan' => '4',
            //     'id_desa' => '4',
            //     'id_SMA' => '560',
            //     'nama_ibu' => '',
            //     'no_whatshap' => '08429348488',
            //     'user_id' => 2,
            // ]
        ];
        $this->db->table('biodata')->insertBatch($data);
    }
}
