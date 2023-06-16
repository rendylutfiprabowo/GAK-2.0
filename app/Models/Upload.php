<?php

namespace App\Models;

use CodeIgniter\Model;

class Upload extends Model
{
    protected $table = "upload";
    protected $primaryKey = "id_siswafoto";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['sktm', 'ktp_ortu', 'sk_pendapatan', 'dokumen',];

    public function getUpload($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
