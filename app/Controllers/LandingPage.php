<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LandingPage extends BaseController
{
    public function index()
    {
        $data = [
        'title' => 'Landing Page'];

        return view('_landing/landing_page', $data);
    }
}
