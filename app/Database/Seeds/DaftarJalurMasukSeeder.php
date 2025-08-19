<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DaftarJalurMasukSeeder extends Seeder
{
    public function run()
    {
        $file = APPPATH . 'Database/Seeds/csv/jalurmasuk.csv';
        $handle = fopen($file, 'r');
        $data = [];

        fgetcsv($handle); // Lewati header

        while (($row = fgetcsv($handle)) !== false) {
            $nama_jalurmasuk    = $row[1] ?? null;

            if ($nama_jalurmasuk) {
                $data[] = [
                    'nama_jalurmasuk'    => $nama_jalurmasuk
                ];
            }
        }

        fclose($handle);

        if (!empty($data)) {
            $this->db->table('daftarjalurmasuk')->insertBatch($data);
        }
    }
}
