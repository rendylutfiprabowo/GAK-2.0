<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Register extends BaseController
{

    private $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {$data = [
        'title' => 'PKH Lolos PTN'];

        return view('register',$data);
    }

    public function signingUp()
    {
        $this->UserModel->save([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'user' => 1
        ]);
        return redirect()->to('/login');
    }
}
