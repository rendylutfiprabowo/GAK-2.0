<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Biodata;
use App\Models\DaftarJalurMasuk;
use App\Models\DaftarProdi;
use App\Models\DaftarUniversitas;
use App\Models\JalurMasuk;
use App\Models\Universitas;

class SiswaDataUniv extends BaseController
{
    private $universitas;

    function __construct()
    {
        $this->universitas = new Universitas();
    }

    public function index()
    {
        $userId = session()->get('user_id');
        $modelUniversitas = new Universitas();
        $universitasList = $modelUniversitas->getUniversitasWithRelasi($userId);
        // var_dump($userId);
        // die();
        $notif = '';
        if (!empty($universitasList)) {
            foreach ($universitasList as $key => $value) {
                if ($value === null || $value === '') {
                    if ($key !== 'id_siswa' && $key !== 'user_id') {
                        $notif = 'Data universitas belum lengkap. Silakan lengkapi semua kolom yang wajib diisi.';
                        break;
                    }
                }
            }
        } else {
            $notif = 'Data universitas belum diisi. Silakan lengkapi data universitas Anda terlebih dahulu.';
        }

        return view('_siswa/datauniv', [
            'title' => 'Data Universitas',
            'universitasList' => $universitasList,
            'notif' => $notif
        ]);
    }


    public function edit()
    {
        // Ambil ID user yang sedang login, contoh dari session:
        $userId = session()->get('user_id');

        // Inisialisasi model
        $modelUniversitas = new Universitas();

        $modelDaftarUniv  = new DaftarUniversitas();
        $listUniversitas = $modelDaftarUniv->findAll();

        $modelProdi       = new DaftarProdi();
        $listProdi = $modelProdi->findAll();

        $modelJalur       = new DaftarJalurMasuk();
        $listJalurMasuk  = $modelJalur->findAll();

        // Ambil 1 baris data universitas (dengan join)
        $univData = $modelUniversitas->getUniversitasWithRelasi($userId);
        // echo $univData['nama_daftaruniversitas']; // output: Universitas A 
        // die();

        $data = [
            'title' => 'Edit Data Universitas',
            'universitasListSelected' => $univData['id_daftaruniversitas'] ?? '', //id univ yg dipilih
            'prodiListSelected'       => $univData['id_daftarprodi'] ?? '',
            'jalurMasukSelected'      => $univData['id_jalurmasuk'] ?? '',
            'tahunMasuk'              => $univData['tahun_masuk'] ?? '',
            'kipSmaStatus'            => isset($univData['kip_sma']) && $univData['kip_sma'] == 1 ? 'Ya' : 'Tidak',
            'kipKuliahStatus'         => isset($univData['kip_kuliah']) && $univData['kip_kuliah'] == 1 ? 'Ya' : 'Tidak',

            // List untuk dropdown
            'listUniversitas' => $listUniversitas,
            'listProdi'       => $listProdi,
            'listJalurMasuk'  => $listJalurMasuk,

            // Data lengkap univ jika ingin ditampilkan langsung
            'univ' => $univData,
        ];


        return view('_siswa/datauniv_edit', $data);
    }

    public function storeuniv()
    {
        // Ambil semua input
        $post = $this->request->getPost();
        // var_dump($post);
        // die();
        // Ambil user_id dari session
        $userId = session()->get('user_id');

        // Validasi wajib
        if (
            empty($post['id_daftaruniversitas']) ||
            empty($post['id_daftarprodi']) ||
            empty($post['id_jalurmasuk']) ||
            empty($post['tahun_masuk'])
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Mohon lengkapi semua data.');
        }

        // Checkbox KIP
        $kip_sma    = isset($post['kip_sma']) ? 1 : 0;
        $kip_kuliah = isset($post['kip_kuliah']) ? 1 : 0;

        // Siapkan data simpan
        $data = [
            'user_id'               => $userId,
            'id_daftaruniversitas' => $post['id_daftaruniversitas'],
            'id_daftarprodi'       => $post['id_daftarprodi'],
            'id_jalurmasuk'        => $post['id_jalurmasuk'],
            'tahun_masuk'          => $post['tahun_masuk'],
            'kip_sma'              => $kip_sma,
            'kip_kuliah'           => $kip_kuliah,
        ];

        // Cek apakah data universitas untuk user_id ini sudah ada
        $universitasModel = new \App\Models\Universitas();
        $existing = $universitasModel->where('user_id', $userId)->first();

        if ($existing) {
            // Update
            $universitasModel->where('user_id', $userId)->set($data)->update();
            session()->setFlashdata('success', 'Data Universitas berhasil diperbarui!');
        } else {
            // Insert
            $universitasModel->insert($data);
            session()->setFlashdata('success', 'Data Universitas berhasil disimpan!');
        }

        return redirect()->to('/DataUniversitas');
    }
}
