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
        return view('_siswa/prestasi');
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
            return view('_siswa/prestasi');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }
}
