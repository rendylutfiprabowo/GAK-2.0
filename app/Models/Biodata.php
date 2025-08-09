<?php

namespace App\Models;

use CodeIgniter\Model;

class Biodata extends Model
{
    protected $table = "biodata";
    protected $primaryKey = "id_siswa";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['email_address', 'nama', 'no_pkh', 'id_pendampingpkh', 'id_kabupaten', 'id_kecamatan', 'id_desa', 'id_SMA', 'nama_ibu', 'no_whatshap', 'user_id'];

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

    public function getAsal_wilayah()
    {
        $builder = $this->db->table("biodata");
        $builder->select("asal_wilayah");
        $builder->selectCount("id_siswa", "total");
        $builder->groupBy("asal_wilayah");
        $data = $builder->get()->getResult();
        return $data;
    }

    public function getBiodataWithRelasi($userId)
    {
        return $this
            ->select('biodata.*, 
                  pendampingpkh.nama_pendamping_pkh as nama_pendamping, 
                  kabupaten.nama_kabupaten, 
                  kecamatan.nama_kecamatan, 
                  desa.nama_desa, 
                  sma.nama_SMA')
            ->join('pendampingpkh', 'pendampingpkh.id_pendampingpkh = biodata.id_pendampingpkh', 'left')
            ->join('kabupaten', 'kabupaten.id_kabupaten = biodata.id_kabupaten', 'left')
            ->join('kecamatan', 'kecamatan.id_kecamatan = biodata.id_kecamatan', 'left')
            ->join('desa', 'desa.id_desa = biodata.id_desa', 'left')
            ->join('sma', 'sma.id_SMA = biodata.id_SMA', 'left')
            ->where('biodata.user_id', $userId)
            ->first();
    }


    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }
}
