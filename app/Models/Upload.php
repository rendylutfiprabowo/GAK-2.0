<?php

namespace App\Models;

use CodeIgniter\Model;

class Upload extends Model
{
    protected $table = "upload";
    protected $primaryKey = "id_siswa";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['sktm', 'ktp_ortu', 'sk_pendapatan', 'dokumen', 'user_id'];

    public function getUpload($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
