<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiswaBiodata extends BaseController
{
    public function index()
    {
        return view('_siswa/biodata');
    }
}
