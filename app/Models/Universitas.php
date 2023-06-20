<?php

namespace App\Models;

use CodeIgniter\Model;

class Universitas extends Model
{
    protected $table = "universitas";
    protected $primaryKey = "id_siswa";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['universitas', 'program_studi', 'tahun_masuk',];

    public function getUniversitas($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }

    public function show($id_siswa)
    {
        $model = new Universitas();
        $data['universitas'] = $model->find($id_siswa);

        return view('_siswa/datauniv_detail', $data);
    }
}
