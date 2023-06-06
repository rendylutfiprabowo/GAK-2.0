<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SiswaUpload extends BaseController
{
    public function index()
    {
        return view('_siswa/upload');
    }
}
