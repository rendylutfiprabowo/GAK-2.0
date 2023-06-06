<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if (session()->logged_in) return view('_admin/dashboard');
        else return redirect()->to('login');
    }


    function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }

    public function login()
    {
        if (session()->logged_in) return view('login');
        return view('login');
    }

    public function eror()
    {
        return view('eror');
    }

    public function alert()
    {
        return view('alert');
    }
}
