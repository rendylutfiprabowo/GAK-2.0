<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DaftarUniversitasSeeder extends Seeder
{
    public function run()
    {
        $file = APPPATH . 'Database/Seeds/csv/daftaruniversitas.csv';
        $handle = fopen($file, 'r');
        $data = [];

        fgetcsv($handle); // Lewati header

        while (($row = fgetcsv($handle)) !== false) {
            $nama_daftaruniversitas
                = $row[1] ?? null;

            if ($nama_daftaruniversitas) {
                $data[] = [
                    'nama_daftaruniversitas	
'    => $nama_daftaruniversitas,
                ];
            }
        }

        fclose($handle);

        if (!empty($data)) {
            $this->db->table('daftaruniversitas')->insertBatch($data);
        }
    }
}
