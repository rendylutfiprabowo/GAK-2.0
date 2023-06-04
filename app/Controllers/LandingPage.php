<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LandingPage extends BaseController
{
    public function LandingPage()
    {
        return view('_landing/landing_page');
    }
}
