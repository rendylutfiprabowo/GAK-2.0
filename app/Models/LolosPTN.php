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

    public function getAsal_kab()
    {
        $builder = $this->db->table("lolosptn");
        $builder->select("kabupaten_kota");
        $builder->selectCount("id_siswa", "total");
        $builder->groupBy("kabupaten_kota");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getUniv()
    {
        $builder = $this->db->table("lolosptn");
        $builder->select("universitas");
        $builder->selectCount("id_siswa", "total");
        $builder->groupBy("universitas");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getJalur()
    {
        $builder = $this->db->table("lolosptn");
        $builder->select("jalur_masukptn");
        $builder->selectCount("id_siswa", "total");
        $builder->groupBy("jalur_masukptn");
        $data = $builder->get()->getResult();
        return $data;
    }
}
