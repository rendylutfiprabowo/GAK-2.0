<?php

namespace App\Models;

use CodeIgniter\Model;

class Universitas extends Model
{
    protected $table = "universitas";
    protected $primaryKey = "id_siswa";
    protected $returnType = "array";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_daftaruniversitas', 'id_daftarprodi', 'id_jalurmasuk', 'tahun_masuk', 'kip_sma', 'kip_kuliah', 'user_id'];

    public function getUniversitas($where = false)
    {
        if ($where === false) {
            return $this->findAll();
        } else {
            return $this->getWhere($where);
        }
    }

    public function getUniversitasWithRelasi($userId)
    {
        return $this
            ->select('
            universitas.*,
            daftaruniversitas.nama_daftaruniversitas,
            daftarprodi.nama_daftarprodi,
            daftarjalurmasuk.nama_jalurmasuk
        ')
            ->join('daftaruniversitas', 'daftaruniversitas.id_daftaruniversitas = universitas.id_daftaruniversitas', 'left')
            ->join('daftarprodi', 'daftarprodi.id_daftarprodi = universitas.id_daftarprodi', 'left')
            ->join('daftarjalurmasuk', 'daftarjalurmasuk.id_jalurmasuk = universitas.id_jalurmasuk', 'left')
            ->where('universitas.user_id', $userId)
            ->first();
    }



    public function show($id_siswa)
    {
        $model = new Universitas();
        $data['universitas'] = $model->find($id_siswa);

        return view('_siswa/datauniv_detail', $data);
    }
}
