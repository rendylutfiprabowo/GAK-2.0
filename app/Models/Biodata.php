<?php

namespace App\Models;

use CodeIgniter\Model;

class Biodata extends Model
{
    protected $table = "biodata";
    protected $primaryKey = "id_siswa";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['email_address', 'nama', 'no_pkh', 'nama_pendamping', 'asal_wilayah', 'asal_sekolah', 'nama_ibu', 'no_whatshap',];

    public function getBiodata($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }

    public function show($id_siswa)
    {
        $model = new Biodata();
        $data['biodata'] = $model->find($id_siswa);

        return view('_siswa/biodata_detail', $data);
    }

    public function getAsal_wilayah(){
        $builder = $this->db->table("biodata");
        $builder->select("asal_wilayah");
        $builder->selectCount("id_siswa", "total");
        $builder->groupBy("asal_wilayah");
        $data = $builder->get()->getResult();
        return $data;
    }
}
