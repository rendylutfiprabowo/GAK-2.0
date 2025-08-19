<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarDesa extends Model
{
    protected $table            = 'daftardesa';
    protected $primaryKey       = 'id_desa';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_desa', 'id_kecamatan', 'id_kabupaten'];

    public function getWithDetail()
    {
        return $this->select('daftardesa.*, daftarkecamatan.nama_kecamatan, daftarkabupaten.nama_kabupaten')
            ->join('daftarkecamatan', 'daftarkecamatan.id_kecamatan = daftardesa.id_kecamatan', 'left')
            ->join('daftarkabupaten', 'daftarkabupaten.id_kabupaten = daftardesa.id_kabupaten', 'left')
            ->findAll();
    }
}
