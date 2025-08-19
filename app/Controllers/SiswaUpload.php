<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Upload;

class SiswaUpload extends BaseController
{
    protected $upload;

    function __construct()
    {
        $this->upload = new Upload();
    }

    public function index()
    {
        $userId = session()->get('user_id'); // ambil user_id dari session
        $dokumen = $this->upload->where('user_id', $userId)->first();

        $notif = '';
        if (!empty($dokumen)) {
            // cek apakah ada file yang kosong
            $requiredFiles = ['sktm', 'ktp_ortu', 'sk_pendapatan', 'dokumen'];
            foreach ($requiredFiles as $fileKey) {
                if (empty($dokumen[$fileKey])) {
                    $notif = "Anda belum mengupload file " . strtoupper(str_replace('_', ' ', $fileKey)) . ". Mohon lengkapi upload dokumen.";
                    break;
                }
            }
        } else {
            $notif = 'Anda belum mengupload dokumen apapun. Silakan upload dokumen terlebih dahulu.';
        }

        $data = [
            'title' => 'Upload Dokumen',
            'dokumen' => $dokumen,
            'notif' => $notif
        ];

        return view('_siswa/upload', $data);
    }

    public function storeup()
    {
        $userId = session()->get('user_id');
        $namaSiswa = session()->get('nama_siswa'); // pastikan ini ada
        $namaSiswaSafe = preg_replace('/[^A-Za-z0-9_\-]/', '_', $namaSiswa);

        $existing = $this->upload->where('user_id', $userId)->first();

        $sktm = $this->request->getFile('sktm');
        $ktportu = $this->request->getFile('ktp_ortu');
        $skpendapatan = $this->request->getFile('sk_pendapatan');
        $dokumenlainnya = $this->request->getFile('dokumen');

        $dataUpdate = ['user_id' => $userId];
        $timestamp = date('Ymd_His');

        // ===== SKTM =====
        if ($sktm && $sktm->isValid() && !$sktm->hasMoved()) {
            $filesktm = 'SKTM_' . $namaSiswaSafe . '_' . $timestamp . '.' . $sktm->getExtension();
            $sktm->move('gambarSktm/', $filesktm);
            $dataUpdate['sktm'] = $filesktm;

            if (!empty($existing['sktm']) && file_exists('gambarSktm/' . $existing['sktm'])) {
                unlink('gambarSktm/' . $existing['sktm']);
            }
        } else if ($existing) {
            $dataUpdate['sktm'] = $existing['sktm'];
        }

        // ===== KTP Ortu =====
        if ($ktportu && $ktportu->isValid() && !$ktportu->hasMoved()) {
            $filektp = 'KTP_' . $namaSiswaSafe . '_' . $timestamp . '.' . $ktportu->getExtension();
            $ktportu->move('gambarKtp/', $filektp);
            $dataUpdate['ktp_ortu'] = $filektp;

            if (!empty($existing['ktp_ortu']) && file_exists('gambarKtp/' . $existing['ktp_ortu'])) {
                unlink('gambarKtp/' . $existing['ktp_ortu']);
            }
        } else if ($existing) {
            $dataUpdate['ktp_ortu'] = $existing['ktp_ortu'];
        }

        // ===== SK Pendapatan =====
        if ($skpendapatan && $skpendapatan->isValid() && !$skpendapatan->hasMoved()) {
            $filesk = 'SKP_' . $namaSiswaSafe . '_' . $timestamp . '.' . $skpendapatan->getExtension();
            $skpendapatan->move('gambarSK/', $filesk);
            $dataUpdate['sk_pendapatan'] = $filesk;

            if (!empty($existing['sk_pendapatan']) && file_exists('gambarSK/' . $existing['sk_pendapatan'])) {
                unlink('gambarSK/' . $existing['sk_pendapatan']);
            }
        } else if ($existing) {
            $dataUpdate['sk_pendapatan'] = $existing['sk_pendapatan'];
        }

        // ===== Dokumen lainnya =====
        if ($dokumenlainnya && $dokumenlainnya->isValid() && !$dokumenlainnya->hasMoved()) {
            $filedokumen = 'DOC_' . $namaSiswaSafe . '_' . $timestamp . '.' . $dokumenlainnya->getExtension();
            $dokumenlainnya->move('gambarDokumen/', $filedokumen);
            $dataUpdate['dokumen'] = $filedokumen;

            if (!empty($existing['dokumen']) && file_exists('gambarDokumen/' . $existing['dokumen'])) {
                unlink('gambarDokumen/' . $existing['dokumen']);
            }
        } else if ($existing) {
            $dataUpdate['dokumen'] = $existing['dokumen'];
        }

        // Simpan database
        if ($existing) {
            $this->upload->update($existing['id_siswa'], $dataUpdate);
        } else {
            $this->upload->insert($dataUpdate);
        }

        session()->setFlashdata('success', 'Dokumen Kamu berhasil disimpan!');
        return redirect()->to('UploadDokumen');
    }
}
