<?php

namespace App\Models;

use CodeIgniter\Model;

class Prestasi extends Model
{
    protected $table = "prestasi";
    protected $primaryKey = "id_prestasisiswa";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = [
        'nama_prestasi',
        'tingkat_prestasi',
        'tahun_prestasi',
        'sertifikat_prestasi',
        'id_siswa',
        'user_id',
    ];

    public function getPrestasi($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
