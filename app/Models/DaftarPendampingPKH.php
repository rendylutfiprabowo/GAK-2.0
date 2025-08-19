<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarPendampingPKH extends Model
{
    protected $table            = 'daftarpendampingpkh';
    protected $primaryKey       = 'id_pendampingpkh';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_pendamping_pkh', 'no_tel', 'alamat', 'id_kabupaten'];

    public function getWithKabupaten()
    {
        return $this->select('daftarpendampingpkh.*, daftarkabupaten.nama_kabupaten')
            ->join('daftarkabupaten', 'daftarkabupaten.id_kabupaten = daftarpendampingpkh.id_kabupaten')
            ->findAll();
    }
}
