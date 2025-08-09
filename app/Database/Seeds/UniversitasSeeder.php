<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UniversitasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_siswa' => '2',
                'id_daftaruniversitas' => '1',
                'id_daftarprodi' => '4',
                'id_jalurmasuk' => '2',
                'tahun_masuk' => '2025',
                'kip_sma' => '0',
                'kip_kuliah' => '1',
                'user_id' => '2',
            ]
        ];
        $this->db->table('universitas')->insertBatch($data);
    }
}
