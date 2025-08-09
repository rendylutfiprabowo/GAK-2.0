<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminPendampingPKH extends BaseController
{
    public function index()
    {
        return view('_admin/pendampingPKH');
    }
}
