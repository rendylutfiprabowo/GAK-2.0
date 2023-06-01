<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiswaDashboard extends BaseController
{
    public function SiswaDashboard()
    {
        return view('_siswa/dashboard');
    }
}
