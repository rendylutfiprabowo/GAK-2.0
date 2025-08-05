<?php

namespace App\Controllers;

use App\Database\Migrations\Admin;
use App\Models\UserModel;

class Login extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (session()->logged_in) return redirect()->to('dashboard');
        return view('login');
    }

    public function process()
    {

        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = $users->where(['username' => $username,])->first();

        if (password_verify($password, $dataUser->password)) {
            session()->set([
                'username' => $dataUser->username,
                'user' => $dataUser->user,
                'logged_in' => TRUE
            ]);
            $ses_data = [
                'title' => 'Login',
                'username' => $dataUser->username,
                'user' => $dataUser->user,
                'logged_in'     => true,
            ];
            $this->session->set($ses_data);
            if (session()->get('user') == '0') {
                return redirect()->to(base_url('AdminDashboard'));
            } elseif ((session()->get('user') == '1')) {
                return redirect()->to(base_url('SiswaDashboard'));
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
