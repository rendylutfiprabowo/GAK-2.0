<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarKecamatan extends Model
{
    protected $table            = 'daftarkecamatan';
    protected $primaryKey       = 'id_kecamatan';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_kecamatan', 'id_kabupaten'];


    public function getWithKabupaten()
    {
        return $this->select('daftarkecamatan.*, daftarkabupaten.nama_kabupaten')
            ->join('daftarkabupaten', 'daftarkabupaten.id_kabupaten = daftarkecamatan.id_kabupaten', 'left')
            ->findAll();
    }
}
