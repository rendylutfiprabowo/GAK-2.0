<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiswaDashboard extends BaseController
{
    public function index()
    {
        return view('_siswa/dashboard');
    }
}
