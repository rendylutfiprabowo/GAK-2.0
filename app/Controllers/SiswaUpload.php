<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Upload;

class SiswaUpload extends BaseController
{
    function __construct()
    {
        $this->upload = new Upload();
    }

    public function index()
    {
        if (session()->get('user') == '1') {
            $data = [
                'title' => 'Upload'];
        return view('_siswa/upload',$data);
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }

    public function storeup()
    {
        if (session()->get('user') == '1') {
            $sktm = $this->request->getFile('sktm');
            $ktportu = $this->request->getFile('ktp_ortu');
            $skpendapatan = $this->request->getFile('sk_pendapatan');
            $dokumenlainnya = $this->request->getFile('dokumen');

            $filesktm = $sktm->getRandomName();
            $filektp = $ktportu->getRandomName();
            $filesk = $skpendapatan->getRandomName();
            $filedokumen = $dokumenlainnya->getRandomName();
            $this->upload->insert([
                'sktm' => $filesktm,
                'ktp_ortu' =>  $filektp,
                'sk_pendapatan' =>  $filesk,
                'dokumen' => $filedokumen,
            ]);
            $sktm->move('gambarSktm/', $filesktm);
            $ktportu->move('gambarKtp/', $filektp);
            $skpendapatan->move('gambarSK/',  $filesk);
            $dokumenlainnya->move('gambarDokumen/', $filedokumen);

            $session = session();
            $session->setFlashdata('success', 'Dokumen Kamu, berhasil disimpan!');

            // Redirect ke halaman yang diinginkan
            return redirect()->to('UploadDokumen');

            // return view('_siswa/upload');
        } else {
            return redirect()->to(base_url('AdminDashboard'));
        }
    }
}
