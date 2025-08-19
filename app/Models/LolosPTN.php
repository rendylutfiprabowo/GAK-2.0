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
        $builder = $this->db->table("biodata b");
        $builder->select("dk.nama_kabupaten, COUNT(b.id_siswa) as total");
        $builder->join("daftarkabupaten dk", "dk.id_kabupaten = b.id_kabupaten");
        $builder->groupBy("b.id_kabupaten, dk.nama_kabupaten");
        return $builder->get()->getResult();
    }

    public function getUniv()
    {
        $builder = $this->db->table("universitas u");
        $builder->select("du.nama_daftaruniversitas, COUNT(u.id_siswa) as total");
        $builder->join("daftaruniversitas du", "du.id_daftaruniversitas = u.id_daftaruniversitas");
        $builder->groupBy("u.id_daftaruniversitas, du.nama_daftaruniversitas");
        return $builder->get()->getResult();
    }

    public function getJalur()
    {
        $builder = $this->db->table("universitas u");
        $builder->select("dj.nama_jalurmasuk, COUNT(u.id_siswa) as total");
        $builder->join("daftarjalurmasuk dj", "dj.id_jalurmasuk = u.id_jalurmasuk");
        $builder->groupBy("u.id_jalurmasuk, dj.nama_jalurmasuk");
        return $builder->get()->getResult();
    }
}
