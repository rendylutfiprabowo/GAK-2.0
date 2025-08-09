<?php

namespace App\Models;

use CodeIgniter\Model;

class PendampingPKH extends Model
{
    protected $table            = 'pendampingpkh';
    protected $primaryKey       = 'id_pendampingpkh';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nama_pendamping_pkh', 'no_tel', 'alamat', 'id_kabupaten'];

    public function getWithKabupaten()
    {
        return $this->select('pendampingpkh.*, kabupaten.nama_kabupaten')
            ->join('kabupaten', 'kabupaten.id_kabupaten = pendampingpkh.id_kabupaten')
            ->findAll();
    }
}
