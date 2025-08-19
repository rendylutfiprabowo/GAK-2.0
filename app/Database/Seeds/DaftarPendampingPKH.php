<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DaftarPendampingPKH extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_pendamping_pkh' => 'SUJARWO',
                'no_tel' => '0812345678901',
                'alamat' => 'Jl. Prof Brodjonegoro',
                'id_kabupaten' => 1,
            ],
            [
                'nama_pendamping_pkh' => 'BELLA ARI S',
                'no_tel' => '089853165456',
                'alamat' => 'Jl. Kampung Baru',
                'id_kabupaten' => 11,
            ],
        ];
        $this->db->table('daftarpendampingpkh')->insertBatch($data);
    }
}
