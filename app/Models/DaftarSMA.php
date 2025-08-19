<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarSMA extends Model
{
    protected $table            = 'daftarsma';
    protected $primaryKey       = 'id_SMA';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_SMA', 'id_kabupaten'];

    public function getWithWilayah()
    {
        return $this->select(
            'daftarsma.*, daftarkabupaten.nama_kabupaten'
        )
            ->join('daftarkabupaten', 'daftarkabupaten.id_kabupaten = daftarsma.id_kabupaten', 'left')
            ->findAll();
    }
}
