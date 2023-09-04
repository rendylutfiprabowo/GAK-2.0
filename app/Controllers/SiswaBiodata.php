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
            $data = [
                'title' => 'Biodata'];
        
            return view('_siswa/biodata',$data);
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }

    public function store()
    {
        if (session()->get('user') == '1') {
            $data = $this->request->getPost();
            $this->biodata->insert($data);

            $session = session();
            $session->setFlashdata('success', 'Biodata Kamu, berhasil disimpan!');

            // Redirect ke halaman yang diinginkan
            return redirect()->to('Biodata');

            // return view('_siswa/biodata');
            // return view('_siswa/biodata');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }

    public function detail($id)
    {
        $model = new Biodata();
        $siswabiodata = $model->find($id);

        return view('_siswa/biodata_detail', ['siswabiodata' => $siswabiodata]);
    }
}
