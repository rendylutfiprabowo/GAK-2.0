<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\Biodata;
use App\Models\LolosPTN;
use App\Models\Universitas;
use App\Models\Prestasi;
use App\Models\Upload;


class AdminDashboard extends BaseController
{
    function __construct()
    {
        parent::__construct();
    }

    public function AdminDashboard()
    {
        $user = new UserModel();
        $biodata = new Biodata();
        $universitas = new Universitas();
        $prestasi = new Prestasi();
        $upload = new Upload();
        $lolosPTN = new LolosPTN();

        if (session()->get('user') == '0') {

            // jumlah siswa
            $jumlah_siswa = $user->countAllResults();

            // jumlah biodata
            $jumlah_biodata = $biodata->countAllResults();

            // jumlah universitas
            $jumlah_universitas = $universitas->countAllResults();

            // jumlah prestasi
            $jumlah_prestasi = $prestasi->countAllResults();

            // jumlah upload
            $jumlah_upload = $upload->countAllResults();

            $mappingkab = $lolosPTN->getAsal_kab();
            $mappinguniv = $lolosPTN->getUniv();
            $mappingjalur = $lolosPTN->getJalur();

            $data = [
                'title' => 'Dashboard Admin',
                'mappingUniv' => $mappinguniv,
                'mappingJalur' => $mappingjalur,
                'mappingKab' => $mappingkab,
                'jumlahSiswa' => $jumlah_siswa,
                'jumlahBiodata' => $jumlah_biodata,
                'jumlahUniversitas' => $jumlah_universitas,
                'jumlahPrestasi' => $jumlah_prestasi,
                'jumlahUpload' => $jumlah_upload,
            ];
            return view('_admin/dashboard', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
