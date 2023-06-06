<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiswaDataUniv extends BaseController
{
    public function index()
    {
        return view('_siswa/datauniv');
    }
}
