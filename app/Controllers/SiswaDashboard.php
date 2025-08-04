<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiswaDashboard extends BaseController
{
    public function index()
    {
        $title = 'Dashboard Siswa';

        $data = [
            'title' => $title,
        ];
        return view('_siswa/dashboard', $data);
    }
}
