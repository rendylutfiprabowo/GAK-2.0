<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Universitas;

class SiswaDataUniv extends BaseController
{
    function __construct()
    {
        $this->universitas = new Universitas();
    }

    public function index()
    {
        if (session()->get('user') == '1') {
            return view('_siswa/datauniv');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }

    public function storeuniv()
    {
        if (session()->get('user') == '1') {
            $data = $this->request->getPost();
            $this->universitas->insert($data);

            return view('_siswa/datauniv');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }
}
