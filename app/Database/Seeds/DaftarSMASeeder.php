<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DaftarSmaSeeder extends Seeder
{
    public function run()
    {
        $file = APPPATH . 'Database/Seeds/csv/sma.csv';
        $handle = fopen($file, 'r');
        $data = [];

        fgetcsv($handle); // Skip header

        while (($row = fgetcsv($handle)) !== false) {
            $nama_SMA     = $row[1] ?? null;
            $id_kabupaten = $row[2] ?? null;

            if ($nama_SMA && $id_kabupaten) {
                $data[] = [
                    'nama_SMA'     => $nama_SMA,
                    'id_kabupaten' => $id_kabupaten,
                ];
            }
        }

        fclose($handle);

        if (!empty($data)) {
            $this->db->table('daftarsma')->insertBatch($data);
        }
    }
}
