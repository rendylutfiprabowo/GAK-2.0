<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DaftarProdiSeeder extends Seeder
{
    public function run()
    {
        $file = APPPATH . 'Database/Seeds/csv/daftarprodi.csv';
        $handle = fopen($file, 'r');
        $data = [];

        fgetcsv($handle); // Lewati header

        while (($row = fgetcsv($handle)) !== false) {
            $nama_daftarprodi    = $row[1] ?? null;

            if ($nama_daftarprodi) {
                $data[] = [
                    'nama_daftarprodi'    => $nama_daftarprodi,
                ];
            }
        }

        fclose($handle);

        if (!empty($data)) {
            $this->db->table('daftarprodi')->insertBatch($data);
        }
    }
}
