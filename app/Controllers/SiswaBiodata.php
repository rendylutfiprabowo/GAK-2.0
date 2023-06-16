<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Biodata;

class SiswaBiodata extends BaseController
{
    function __construct()
    {
        $this->biodata = new Biodata();
    }

    public function index()
    {
        if (session()->get('user') == '1') {
            return view('_siswa/biodata');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }

    public function store()
    {
        if (session()->get('user') == '1') {
            $data = $this->request->getPost();
            $this->biodata->insert($data);

            return view('_siswa/biodata');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }
}
