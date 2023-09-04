<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Prestasi;

class SiswaPrestasi extends BaseController
{
    function __construct()
    {
        $this->prestasi = new Prestasi();
    }

    public function index()
    {
        $data = [
            'title' => 'Prestasi'];
    return view('_siswa/prestasi',$data);
    }

    public function storeprestasi()
    {
        if (session()->get('user') == '1') {
            $prestasi = $this->request->getFile('upload_prestasi');
            $filesprestasi = $prestasi->getRandomName();
            $this->prestasi->insert([
                'upload_prestasi' => $filesprestasi,
            ]);
            $prestasi->move('gambarSertifikat/', $filesprestasi);

            $session = session();
            $session->setFlashdata('success', 'Data Prestasi Kamu, berhasil disimpan!');

            // Redirect ke halaman yang diinginkan
            return redirect()->to('Prestasi');

            // return view('_siswa/prestasi');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }
}
