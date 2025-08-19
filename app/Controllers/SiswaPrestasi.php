<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Biodata;
use App\Models\Prestasi;
use App\Models\UserModel;

class SiswaPrestasi extends BaseController
{
    protected $prestasi;
    protected $biodata;
    protected $user;

    function __construct()
    {
        $this->prestasi = new Prestasi();
        $this->biodata = new Biodata();
        $this->user = new UserModel();
    }

    public function index()
    {
        $userId = session()->get('user_id');

        $model = new Prestasi();
        $prestasi = $model->where('user_id', $userId)->findAll();

        $data = [
            'title'    => 'Prestasi',
            'prestasi' => $prestasi
        ];

        return view('_siswa/prestasi', $data);
    }


    public function add()
    {
        $data = [
            'title' => 'Tambah Prestasi'
        ];
        return view('_siswa/prestasi_add', $data);
    }

    public function storeprestasi()
    {
        $userId = session()->get('user_id'); // ambil id user login

        // Ambil id_siswa dari tabel biodata
        $biodataModel = new Biodata();
        $biodata = $biodataModel->where('user_id', $userId)->first();

        if (!$biodata) {
            session()->setFlashdata('error', 'Biodata tidak ditemukan. Silakan isi biodata dulu.');
            return redirect()->to('biodata1');
        }

        $idSiswa = $biodata['id_siswa'];
        // var_dump($idSiswa);
        // die();
        // Ambil data dari form
        $nama_prestasi    = $this->request->getPost('nama_prestasi');
        $tingkat_prestasi = $this->request->getPost('tingkat_prestasi');
        $tahun_prestasi   = $this->request->getPost('tahun_prestasi');

        // Ambil file upload
        $prestasiFile = $this->request->getFile('sertifikat_prestasi');

        if ($prestasiFile && $prestasiFile->isValid() && !$prestasiFile->hasMoved()) {
            $ext = $prestasiFile->getClientExtension();
            $fileName = $tahun_prestasi . '_' . preg_replace('/\s+/', '_', strtolower($nama_prestasi)) . '_' . time() . '.' . $ext;

            // Pindahkan file
            $prestasiFile->move(FCPATH . 'gambarSertifikat/', $fileName);

            // Simpan ke database
            $this->prestasi->insert([
                'user_id'             => $userId,
                'id_siswa'            => $idSiswa, // tambahkan ini
                'nama_prestasi'       => $nama_prestasi,
                'tingkat_prestasi'    => $tingkat_prestasi,
                'tahun_prestasi'      => $tahun_prestasi,
                'sertifikat_prestasi' => $fileName
            ]);

            session()->setFlashdata('success', 'Data Prestasi Kamu berhasil disimpan!');
        } else {
            session()->setFlashdata('error', 'Gagal mengupload file sertifikat!');
        }

        return redirect()->to('Prestasi');
    }

    public function edit($id_prestasisiswa)
    {
        $userId = session()->get('user_id');
        // Ambil id_siswa dari tabel biodata berdasarkan user_id
        $user = $this->user
            ->where('user_id', $userId)
            ->first();
        $biodata = $this->biodata
            ->where('user_id', $userId)
            ->first();

        $id_siswa = $biodata['id_siswa'];

        if (!$user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data user tidak ditemukan.');
        }

        // Ambil data prestasi yang sesuai user dan siswa
        $prestasi = $this->prestasi
            ->where('id_prestasisiswa', $id_prestasisiswa)
            ->where('user_id', $userId)
            ->where('id_siswa', $id_siswa)
            ->first();

        if (!$prestasi) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data prestasi tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Prestasi',
            'prestasi' => $prestasi
        ];

        return view('_siswa/prestasi_edit', $data);
    }

    public function update($id_prestasisiswa)
    {
        $userId = session()->get('user_id');
        // Ambil id_siswa dari tabel biodata berdasarkan user_id
        $user = $this->user
            ->where('user_id', $userId)
            ->first();
        $biodata = $this->biodata
            ->where('user_id', $userId)
            ->first();

        $id_siswa = $biodata['id_siswa'];

        if (!$user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data user tidak ditemukan.');
        }

        // Ambil data prestasi yang sesuai user dan siswa
        $prestasi = $this->prestasi
            ->where('id_prestasisiswa', $id_prestasisiswa)
            ->where('user_id', $userId)
            ->where('id_siswa', $id_siswa)
            ->first();

        if (!$prestasi) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data prestasi tidak ditemukan.');
        }

        $nama_prestasi   = $this->request->getPost('nama_prestasi');
        $tingkat_prestasi = $this->request->getPost('tingkat_prestasi');
        $tahun_prestasi   = $this->request->getPost('tahun_prestasi');

        // Cek upload sertifikat baru
        $prestasiFile = $this->request->getFile('sertifikat_prestasi');
        $fileName = $prestasi['sertifikat_prestasi']; // default tetap file lama

        if ($prestasiFile && $prestasiFile->isValid() && !$prestasiFile->hasMoved()) {
            $ext = $prestasiFile->getClientExtension();
            $fileName = $tahun_prestasi . '_' . preg_replace('/\s+/', '_', strtolower($nama_prestasi)) . '_' . time() . '.' . $ext;
            $prestasiFile->move(FCPATH . 'gambarSertifikat/', $fileName);

            // Hapus file lama
            if (file_exists(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi'])) {
                unlink(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi']);
            }
        }

        // Update data
        $this->prestasi->update($id_prestasisiswa, [
            'user_id' => $userId,
            'id_siswa' => $biodata['id_siswa'],
            'nama_prestasi' => $nama_prestasi,
            'tingkat_prestasi' => $tingkat_prestasi,
            'tahun_prestasi' => $tahun_prestasi,
            'sertifikat_prestasi' => $fileName
        ]);

        session()->setFlashdata('success', 'Data prestasi berhasil diperbarui!');
        return redirect()->to('/Prestasi');
    }

    public function delete($id_prestasisiswa)
    {
        $userId = session()->get('user_id');

        // Ambil data biodata user
        $biodata = $this->biodata
            ->where('user_id', $userId)
            ->first();

        if (!$biodata) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data biodata tidak ditemukan.');
        }

        $id_siswa = $biodata['id_siswa'];

        // Ambil data prestasi yang sesuai user
        $prestasi = $this->prestasi
            ->where('id_prestasisiswa', $id_prestasisiswa)
            ->where('user_id', $userId)
            ->where('id_siswa', $id_siswa)
            ->first();

        if (!$prestasi) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data prestasi tidak ditemukan.');
        }

        // Hapus file sertifikat jika ada
        if (!empty($prestasi['sertifikat_prestasi']) && file_exists(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi'])) {
            unlink(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi']);
        }

        // Hapus data dari database
        $this->prestasi->delete($id_prestasisiswa);

        session()->setFlashdata('success', 'Data prestasi berhasil dihapus!');
        return redirect()->to('/Prestasi');
    }
}
