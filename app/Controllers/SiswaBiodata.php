<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Seeds\DaftarDesaSeeder;
use App\Models\Biodata;
use App\Models\DaftarDesa;
use App\Models\DaftarKabupaten;
use App\Models\DaftarKecamatan;
use App\Models\DaftarPendampingPKH;
use App\Models\DaftarSMA;

class SiswaBiodata extends BaseController
{
    private $biodata;

    function __construct()
    {
        $this->biodata = new Biodata();
    }

    public function index()
    {
        $userId = session()->get('user_id');
        $model = new Biodata();
        $biodata = $model->getBiodataWithRelasi($userId);

        $notif = '';
        if (!empty($biodata)) {
            foreach ($biodata as $key => $value) {
                if (empty($value) && $key !== 'id_siswa' && $key !== 'user_id') {
                    $notif = 'Data biodata belum lengkap. Silakan lengkapi semua kolom yang wajib diisi.';
                    break;
                }
            }
        }  

        return view('_siswa/biodata', [
            'title' => 'Biodata',
            'biodata' => $biodata,
            'notif' => $notif
        ]);
    }

    public function getKecamatan()
    {
        $id_kabupaten = $this->request->getPost('id_kabupaten');
        $model = new DaftarKecamatan();
        $data = $model->where('id_kabupaten', $id_kabupaten)->findAll();
        return $this->response->setJSON($data);
    }

    public function getDesa()
    {
        $id_kecamatan = $this->request->getPost('id_kecamatan');
        $model = new DaftarDesa();
        $data = $model->where('id_kecamatan', $id_kecamatan)->findAll();
        return $this->response->setJSON($data);
    }


    public function edit()
    {
        $userId = session()->get('user_id');

        if ($userId) {
            $biodataModel = new Biodata();
            $biodata = $biodataModel->where('user_id', $userId)->first();
        }

        $modelPendamping = new DaftarPendampingPKH();
        $pendampingList = $modelPendamping->select('id_pendampingpkh, nama_pendamping_pkh')->findAll();

        $modelKabupaten = new DaftarKabupaten();
        $kabupatenList = $modelKabupaten->select('id_kabupaten, nama_kabupaten')->findAll();

        $modelKecamatan = new DaftarKecamatan();
        $kecamatanList = $modelKecamatan->select('id_kecamatan, nama_kecamatan')->findAll();

        $modelDesa = new DaftarDesa();
        $desaList = $modelDesa->select('id_desa, nama_desa')->findAll();

        $modelSMA = new DaftarSMA();
        $SMAList = $modelSMA->select('id_SMA, nama_SMA')->findAll();

        $kecamatanList = [];
        $desaList = [];

        if ($biodata && isset($biodata['id_kabupaten'])) {
            $kecamatanList = $modelKecamatan->where('id_kabupaten', $biodata['id_kabupaten'])->findAll();
        }

        if ($biodata && isset($biodata['id_kecamatan'])) {
            $desaList = $modelDesa->where('id_kecamatan', $biodata['id_kecamatan'])->findAll();
        }


        $data = [
            'title' => 'Edit Biodata',
            'biodata' => $biodata,
            'pendampingList' => $pendampingList,
            'kabupatenList' => $kabupatenList,
            'kecamatanList' => $kecamatanList,
            'desaList' => $desaList,
            'SMAList' => $SMAList,
        ];

        return view('_siswa/biodata_edit', $data);
    }


    public function store()
    {
        $session = session();
        $userId = $session->get('user_id');

        if (!$userId) {
            // Redirect atau handle jika user belum login
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $biodataModel = new \App\Models\Biodata();

        // Ambil data input dari form
        $data = [
            'user_id'          => $userId,
            'email_address'    => $this->request->getPost('email_address'),
            'nama'             => $this->request->getPost('nama'),
            'no_pkh'           => $this->request->getPost('no_pkh'),
            'id_pendampingpkh' => $this->request->getPost('id_pendampingpkh'),
            'id_kabupaten'     => $this->request->getPost('id_kabupaten'),
            'id_kecamatan'     => $this->request->getPost('id_kecamatan'),
            'id_desa'          => $this->request->getPost('id_desa'),
            'id_SMA'           => $this->request->getPost('id_SMA'),
            'nama_ibu'         => $this->request->getPost('nama_ibu'),
            'no_whatshap'      => $this->request->getPost('no_whatshap'),
        ];

        // dd($this->request->getPost('id_pendampingpkh'));

        // Cek apakah biodata untuk user ini sudah ada
        $existing = $biodataModel->where('user_id', $userId)->first();

        if ($existing) {
            $primaryKey = $biodataModel->primaryKey;
            $id = $existing[$primaryKey];
            $biodataModel->update($id, $data);
        } else {
            $biodataModel->insert($data);
        }



        // Flash message & redirect
        $session->setFlashdata('success', 'Biodata kamu berhasil diperbarui!');
        return redirect()->to('/Biodata');
    }
}
