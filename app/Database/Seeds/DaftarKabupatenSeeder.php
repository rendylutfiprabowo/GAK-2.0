<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DaftarKabupatenSeeder extends Seeder
{
    public function run()
    {
        $file = APPPATH . 'Database/Seeds/csv/kabupaten.csv';
        $handle = fopen($file, 'r');
        $data = [];

        fgetcsv($handle); // skip header
        while (($row = fgetcsv($handle)) !== false) {
            $id_kabupaten = $row[0];
            $nama_kabupaten = $row[1] ?? null;

            if (!isset($data[$id_kabupaten])) {
                $data[$id_kabupaten] = [
                    'id_kabupaten' => $id_kabupaten,
                    'nama_kabupaten' => $nama_kabupaten,
                ];
            }
        }

        fclose($handle);

        $this->db->table('daftarkabupaten')->insertBatch(array_values($data));
    }
}
