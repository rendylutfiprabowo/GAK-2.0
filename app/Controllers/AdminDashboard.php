<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\Biodata;
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

        $mappingkab = $biodata->getAsal_wilayah();


        $data = [
            'mappingKab' => $mappingkab,
            'jumlahSiswa' => $jumlah_siswa,
            'jumlahBiodata' => $jumlah_biodata,
            'jumlahUniversitas' => $jumlah_universitas,
            'jumlahPrestasi' => $jumlah_prestasi,
            'jumlahUpload' => $jumlah_upload,
        ];
        return view('_admin/dashboard', $data);
    }
}
