<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiswaPrestasi extends BaseController
{
    public function index()
    {
        return view('_siswa/prestasi');
    }
}
