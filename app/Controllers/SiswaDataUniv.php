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
            $data = [
                'title' => 'Data Universitas'];
        
            
            return view('_siswa/datauniv',$data);
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }

    public function storeuniv()
    {
        if (session()->get('user') == '1') {
            $data = $this->request->getPost();
            $this->universitas->insert($data);

            $session = session();
            $session->setFlashdata('success', 'Data Universitas Kamu, berhasil disimpan!');

            // Redirect ke halaman yang diinginkan
            return redirect()->to('DataUniversitas');

            // return view('_siswa/datauniv');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }

    public function detail($id)
    {
        $model = new Universitas();
        $universitas = $model->find($id);

        return view('_siswa/datauniv_detail', ['universitas' => $universitas]);
    }
}
