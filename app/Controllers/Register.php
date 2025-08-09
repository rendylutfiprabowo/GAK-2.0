<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Biodata;
use App\Models\UserModel;

class Register extends BaseController
{

    private $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'PKH Lolos PTN'
        ];

        return view('register', $data);
    }

    public function signingUp()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Cek apakah username sudah ada
        $existingUser = $this->UserModel->where('username', $username)->first();
        if ($existingUser) {
            session()->setFlashdata('error', 'Username sudah digunakan! Silakan pilih yang lain.');
            return redirect()->to('/register')->withInput();
        }

        // Simpan user baru
        $this->UserModel->save([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'user' => 1
        ]);

        $userId = $this->UserModel->insertID();
        $BiodataModel = new Biodata();
        $BiodataModel->save([
            'user_id' => $userId,
        ]);

        session()->setFlashdata('success', 'Pendaftaran berhasil! Silakan login.');
        return redirect()->to('/login');
    }
}
