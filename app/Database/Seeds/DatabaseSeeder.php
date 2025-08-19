<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        // Jalankan migrate:refresh
        $migrate = \Config\Services::migrations();
        $migrate->regress(0); // hapus semua tabel migration
        $migrate->latest();   // migrate ulang


        $this->call('UserSeeder');
        $this->call('DaftarKabupatenSeeder');
        $this->call('DaftarPendampingPKH');
        $this->call('DaftarKecamatanSeeder');
        $this->call('DaftarDesaSeeder');
        $this->call('DaftarSMASeeder');
        $this->call('DaftarUniversitasSeeder');
        $this->call('DaftarProdiSeeder');
        $this->call('DaftarJalurMasukSeeder');
        // $this->call('BiodataSeeder');
        // $this->call('UniversitasSeeder');
    }
}
