<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        $file = APPPATH . 'Database/Seeds/csv/kecamatan.csv'; // Pastikan path dan nama file benar
        $handle = fopen($file, 'r');
        $data = [];

        fgetcsv($handle); // Lewati baris header

        while (($row = fgetcsv($handle)) !== false) {
            $id_kecamatan   = $row[0] ?? null;
            $nama_kecamatan = $row[1] ?? null;
            $id_kabupaten   = $row[2] ?? null;

            if ($id_kecamatan && $nama_kecamatan && $id_kabupaten) {
                $data[] = [
                    'id_kecamatan'   => $id_kecamatan,
                    'nama_kecamatan' => $nama_kecamatan,
                    'id_kabupaten'   => $id_kabupaten,
                ];
            }
        }

        fclose($handle);

        if (!empty($data)) {
            $this->db->table('kecamatan')->insertBatch($data);
        }
    }
}
