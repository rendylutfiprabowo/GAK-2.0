<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminLolosptn extends BaseController
{
    public function index()
    {
        return view('_admin/lolosptn');
    }

    public function detail()
    {
        return view('_admin/detailadmin');
    }

    public function edit()
    {
        return view('_admin/editadmin');
    }
}
