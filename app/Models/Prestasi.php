<?php

namespace App\Models;

use CodeIgniter\Model;

class Prestasi extends Model
{
    protected $table = "prestasi";
    protected $primaryKey = "id_siswaprestasi";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_prestasi', 'upload_prestasi',];

    public function getPrestasi($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
