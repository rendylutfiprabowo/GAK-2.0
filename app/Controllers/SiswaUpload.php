<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Biodata;
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
        $biodataModel = new Biodata();
        $data_siswa = $biodataModel->where('user_id', $userId)->first();

        $nama = $data_siswa['nama'];

        $notif = '';
        $dokumen = $this->upload->where('user_id', $userId)->first();

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
            'notif' => $notif,
            'nama' => $nama,
        ];

        return view('_siswa/upload', $data);
    }

    public function storeupold()
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

    public function storeup()
    {
        $userId = session()->get('user_id');
        $uploadModel = new Upload();
        $biodataModel = new Biodata();
        $data_siswa = $biodataModel->where('user_id', $userId)->first();
        $id_siswa = $data_siswa['id_siswa'];
        $namaSiswa = $data_siswa['nama'];
        $namaSiswaSafe = preg_replace('/[^A-Za-z0-9_\-]/', '_', $namaSiswa);
        $dataUpdate = ['user_id' => $userId];
        $timestamp = date('Ymd_His');
        // var_dump($id_siswa);
        // die();

        $uploadFields = [
            'sktm'          => ['folder' => 'gambarSktm',     'prefix' => 'SKTM_'],
            'ktp_ortu'      => ['folder' => 'gambarKtp',      'prefix' => 'KTP_'],
            'sk_pendapatan' => ['folder' => 'gambarSK',       'prefix' => 'SKP_'],
            'dokumen'       => ['folder' => 'gambarDokumen',  'prefix' => 'DOC_'],
        ];

        $existing = $uploadModel->where('id_siswa', $id_siswa)->first();

        foreach ($uploadFields as $field => $info) {
            $file = $this->request->getFile($field);
            $folderPath = FCPATH . $info['folder'] . '/';

            // Pastikan folder ada
            if (!is_dir($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $info['prefix'] . $namaSiswaSafe . '_' . $timestamp . '.' . $file->getExtension();
                $file->move($folderPath, $newName);
                $uploadData[$field] = $newName;

                // Hapus file lama jika ada
                if (!empty($existing[$field]) && file_exists($folderPath . $existing[$field])) {
                    unlink($folderPath . $existing[$field]);
                }
            } else if ($existing) {
                // Pertahankan file lama
                $uploadData[$field] = $existing[$field];
            }
        }

        // Simpan ke database dokumen
        if ($existing) {
            $uploadData['user_id'] = $userId;
            $uploadModel->update($existing['id_siswa'], $uploadData);
        } else {
            $uploadData['id_siswa'] = $id_siswa;
            $uploadData['user_id']  = $userId;
            if (count(array_filter($uploadData)) > 1) { // >1 karena pasti ada id_siswa 
                $uploadModel->insert($uploadData);
            }
        }

        // foreach ($uploadFields as $field => $folderPath) {
        //     $file = $this->request->getFile($field);

        //     if ($file && $file->isValid() && !$file->hasMoved()) {
        //         // ✅ pastikan folder ada
        //         if (!is_dir($folderPath)) {
        //             mkdir($folderPath, 0777, true);
        //         }

        //         // ✅ buat nama file unik per siswa
        //         $newName = '_' . $idSiswaSafe . '_' . $timestamp . '.' . $file->getClientExtension();

        //         // ✅ pindahkan file
        //         $file->move($folderPath, $newName);

        //         // ✅ simpan path
        //         $dataUpdate[$field] = $folderPath . $newName;
        //     }
        // }

        // if (!empty($dataUpdate)) {
        //     $existing = $this->upload->where('id_siswa', $userId)->first();

        //     if ($existing) {
        //         // update berdasarkan primary key id_siswa
        //         $this->upload->update($userId, $dataUpdate);
        //     } else {
        //         // insert baru
        //         $dataUpdate['id_siswa'] = $userId;
        //         $this->upload->insert($dataUpdate);
        //     }
        // }

        return redirect()->to('UploadDokumen')->with('success', 'Dokumen berhasil diupload');
    }
}
