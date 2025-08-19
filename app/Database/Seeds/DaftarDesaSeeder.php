<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DaftarDesaSeeder extends Seeder
{
    public function run()
    {
        $file = APPPATH . 'Database/Seeds/csv/desa.csv';
        $handle = fopen($file, 'r');
        $data = [];

        fgetcsv($handle); // Lewati header

        while (($row = fgetcsv($handle)) !== false) {
            $nama_desa    = $row[1] ?? null;
            $id_kecamatan = $row[2] ?? null;
            $id_kabupaten = $row[3] ?? null;

            if ($nama_desa && $id_kecamatan && $id_kabupaten) {
                $data[] = [
                    'nama_desa'    => $nama_desa,
                    'id_kecamatan' => $id_kecamatan,
                    'id_kabupaten' => $id_kabupaten,
                ];
            }
        }

        fclose($handle);

        if (!empty($data)) {
            $this->db->table('daftardesa')->insertBatch($data);
        }
    }
}
