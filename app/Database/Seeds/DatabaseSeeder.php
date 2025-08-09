<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('KabupatenSeeder');
        $this->call('PendampingPKH');
        $this->call('KecamatanSeeder');
        $this->call('DesaSeeder');
        $this->call('SMASeeder');
        $this->call('DaftarUniversitasSeeder');
        $this->call('DaftarProdiSeeder');
        $this->call('JalurMasukSeeder');
        $this->call('BiodataSeeder');
        $this->call('UserSeeder');
        $this->call('UniversitasSeeder');
    }
}
