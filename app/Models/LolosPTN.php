<?php

namespace App\Models;

use CodeIgniter\Model;

class LolosPTN extends Model
{
    protected $table = "lolosptn";
    protected $primaryKey = "id_siswa";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['email_address', 'nama', 'no_whatshap', 'provinsi', 'kabupaten_kota', 'kecamatan', 'desa', 'asal_sekolah', 'no_pkh', 'jalur_masukptn', 'universitas', 'program_studi', 'status_kip',];

    public function getLolosPTN($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }
}
