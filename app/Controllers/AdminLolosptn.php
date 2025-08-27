<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Biodata;
use App\Models\DaftarDesa;
use App\Models\DaftarJalurMasuk;
use App\Models\DaftarKabupaten;
use App\Models\DaftarKecamatan;
use App\Models\DaftarPendampingPKH;
use App\Models\DaftarProdi;
use App\Models\DaftarSMA;
use App\Models\DaftarUniversitas;
use App\Models\Prestasi;
use App\Models\Universitas;
use App\Models\Upload;
use App\Models\UserModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdminLolosptn extends BaseController
{
    protected $prestasi;

    function __construct()
    {
        $this->prestasi = new Prestasi();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('biodata b');
        $builder->select('b.id_siswa, b.nama, b.no_pkh, u.kip_sma, u.kip_kuliah, b.no_whatshap, usr.username, usr.user');
        $builder->join('universitas u', 'u.id_siswa = b.id_siswa', 'left');
        $builder->join('user usr', 'usr.user_id = b.user_id', 'left'); // join tabel user
        $builder->orderBy('b.nama', 'ASC');

        $PTN = $builder->get()->getResultArray();

        $data = [
            'title'  => 'PKH Lolos PTN',
            'title2' => '',
            'PTN'    => $PTN,
        ];
        return view('_admin/lolosptn', $data);
    }

    public function detail($id_siswa)
    {
        $db = \Config\Database::connect();

        $builder = $db->table('biodata b');
        $builder->select('
            b.id_siswa, 
            b.email_address, 
            b.nama, 
            b.no_whatshap, 
            b.no_pkh, 
            kab.nama_kabupaten AS kabupaten_kota, 
            kec.nama_kecamatan AS kecamatan, 
            des.nama_desa AS desa, 
            sma.nama_SMA AS asal_sekolah, 
            b.nama_ibu,
            jalur.nama_jalurmasuk AS jalur_masukptn,
            univ.nama_daftaruniversitas AS universitas,
            prodi.nama_daftarprodi AS program_studi,
            p_pkh.nama_pendamping_pkh AS pendampingpkh,
            u.kip_sma AS kip_sma,
            u.kip_kuliah AS kip_kuliah,
            u.tahun_masuk AS tahun_masuk, 
            us.username AS username,
            us.password AS password,
        ');
        $builder->join('user us', 'us.user_id = b.user_id', 'left');
        $builder->join('universitas u', 'u.user_id = b.user_id', 'left');
        $builder->join('daftaruniversitas univ', 'univ.id_daftaruniversitas = u.id_daftaruniversitas', 'left');
        $builder->join('daftarprodi prodi', 'prodi.id_daftarprodi = u.id_daftarprodi', 'left');
        $builder->join('daftarjalurmasuk jalur', 'jalur.id_jalurmasuk = u.id_jalurmasuk', 'left');
        $builder->join('daftarkabupaten kab', 'kab.id_kabupaten = b.id_kabupaten', 'left');
        $builder->join('daftarkecamatan kec', 'kec.id_kecamatan = b.id_kecamatan', 'left');
        $builder->join('daftardesa des', 'des.id_desa = b.id_desa', 'left');
        $builder->join('daftarsma sma', 'sma.id_SMA = b.id_SMA', 'left');
        $builder->join('daftarpendampingpkh p_pkh', 'p_pkh.id_pendampingpkh = b.id_pendampingpkh', 'left');

        $builder->where('b.id_siswa', $id_siswa);
        $userId = $db->table('biodata')
            ->select('user_id')
            ->where('id_siswa', $id_siswa)
            ->get()
            ->getRow()
            ->user_id;

        $PTN = $builder->get()->getRowArray();

        // // Data prestasi siswa
        // $prestasi = $db->table('prestasi')
        //     ->where('user_id', $userId)
        //     ->where('id_siswa', $id_siswa)
        //     ->get()
        //     ->getResultArray();

        // foreach ($prestasi as $p) {
        //     echo $p['id_prestasisiswa'] . "<br>";
        // }
        // die();

        $upload = new Upload();
        $dokumen = $upload->where('id_siswa', $id_siswa)->first();
        $modelprestasi = new Prestasi();
        $prestasi = $modelprestasi->where('user_id', $userId)->findAll();

        if (!$PTN) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data dengan ID $id_siswa tidak ditemukan");
        }

        $notif = '';

        // Cek biodata kosong
        foreach ($PTN as $key => $value) {
            if (empty($value) && !in_array($key, ['id_siswa', 'user_id', 'kip_sma', 'kip_kuliah'])) {
                $notif = 'Beberapa biodata siswa belum lengkap.';
                break;
            }
        }

        if (empty($dokumen)) {
            // Kalau tidak ada sama sekali data upload
            if ($notif) {
                $notif .= ' Dan semua dokumen siswa belum di-upload.';
            } else {
                $notif = 'Semua dokumen siswa belum di-upload.';
            }
        } else {
            // Kalau ada record tapi ada field yang kosong
            foreach ($dokumen as $key => $value) {
                if (empty($value) && $key !== 'id_upload') {
                    if ($notif) {
                        $notif .= ' Beberapa dokumen siswa belum di-upload.';
                    } else {
                        $notif = 'Beberapa dokumen siswa belum di-upload.';
                    }
                    break;
                }
            }
        }


        return view('_admin/detaillolosptn', [
            'notif'     => $notif,
            'PTN'     => $PTN,
            'dokumen' => $dokumen,
            'prestasi' => $prestasi,
            'title'   => 'PKH Lolos PTN',
            'title2'  => 'Detail Data Lolos PTN',
        ]);
    }

    public function delete($id_siswa)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('biodata');

        $user_id = $db->table('biodata')
            ->select('user_id')
            ->where('id_siswa', $id_siswa)
            ->get()
            ->getRow('user_id');

        // Hapus data dari tabel biodata
        $builder->where('id_siswa', $id_siswa)->delete();

        // Kalau ada relasi di tabel universitas, hapus juga (opsional)
        $db->table('universitas')->where('id_siswa', $id_siswa)->delete();

        // Kalau ada relasi di tabel upload/dokumen, hapus juga (opsional)
        $db->table('upload')->where('id_siswa', $id_siswa)->delete();

        if ($user_id) {
            $db->table('user')
                ->where('user_id', $user_id)
                ->delete();
        }

        // Redirect kembali dengan pesan sukses
        return redirect()->to('/PKHLolosPTN')->with('message', 'Dihapus');
    }

    public function export()
    {
        $biodataModel     = new \App\Models\Biodata();
        $universitasModel = new \App\Models\Universitas();

        // Ambil data join dari semua tabel terkait
        $data = $universitasModel
            ->select("
                user.user_id,
                user.username,
                user.password,
                user.user,
                biodata.id_siswa,
                biodata.email_address,
                biodata.nama,
                biodata.no_pkh,
                biodata.id_pendampingpkh,
                biodata.id_kabupaten,
                biodata.id_kecamatan,
                biodata.id_desa,
                biodata.id_SMA,
                biodata.nama_ibu,
                biodata.no_whatshap,
                universitas.id_daftaruniversitas,
                universitas.id_daftarprodi,
                universitas.id_jalurmasuk,
                universitas.tahun_masuk,
                universitas.kip_sma,
                universitas.kip_kuliah,
                upload.sktm,
                upload.ktp_ortu,
                upload.sk_pendapatan,
                upload.dokumen
            ")
            ->join('biodata', 'biodata.user_id = universitas.user_id', 'left')
            ->join('user', 'user.user_id = universitas.user_id', 'left')
            ->join('upload', 'upload.id_siswa = universitas.id_siswa', 'left')
            ->join('daftaruniversitas', 'daftaruniversitas.id_daftaruniversitas = universitas.id_daftaruniversitas', 'left')
            ->join('daftarprodi', 'daftarprodi.id_daftarprodi = universitas.id_daftarprodi', 'left')
            ->join('daftarjalurmasuk', 'daftarjalurmasuk.id_jalurmasuk = universitas.id_jalurmasuk', 'left')
            ->findAll();



        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header kolom
        $headers = [
            'No',
            'user_id',
            'username',
            'password',
            'user',
            'id_siswa',
            'Email Address',
            'Nama',
            'No PKH',
            'Pendamping PKH',
            'Kabupaten',
            'Kecamatan',
            'Desa',
            'Asal Sekolah',
            'Nama Ibu',
            'No WhatsApp',
            'Universitas',
            'Program Studi',
            'Jalur Masuk PTN',
            'Tahun Masuk',
            'KIP SMA',
            'KIP Kuliah',
        ];

        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '1', $header);
            $col++;
        }

        // Isi data
        $rowNum = 2;
        foreach ($data as $i => $row) {
            $sheet->setCellValue('A' . $rowNum, $i + 1);
            $sheet->setCellValue('B' . $rowNum, $row['user_id']);
            $sheet->setCellValue('C' . $rowNum, $row['username']);
            $sheet->setCellValue('D' . $rowNum, $row['password']);
            $sheet->setCellValue('E' . $rowNum, $row['user']);
            $sheet->setCellValue('F' . $rowNum, $row['id_siswa']);
            $sheet->setCellValue('G' . $rowNum, $row['email_address']);
            $sheet->setCellValue('H' . $rowNum, $row['nama']);
            $sheet->setCellValue('I' . $rowNum, $row['no_pkh']);
            $sheet->setCellValue('J' . $rowNum, $row['id_pendampingpkh']);
            $sheet->setCellValue('K' . $rowNum, $row['id_kabupaten']);
            $sheet->setCellValue('L' . $rowNum, $row['id_kecamatan']);
            $sheet->setCellValue('M' . $rowNum, $row['id_desa']);
            $sheet->setCellValue('N' . $rowNum, $row['id_SMA']);
            $sheet->setCellValue('O' . $rowNum, $row['nama_ibu']);
            $sheet->setCellValue('P' . $rowNum, $row['no_whatshap']);
            $sheet->setCellValue('Q' . $rowNum, $row['id_daftaruniversitas']);
            $sheet->setCellValue('R' . $rowNum, $row['id_daftarprodi']);
            $sheet->setCellValue('S' . $rowNum, $row['id_jalurmasuk']);
            $sheet->setCellValue('T' . $rowNum, $row['tahun_masuk']);
            $sheet->setCellValue('U' . $rowNum, $row['kip_sma']);
            $sheet->setCellValue('V' . $rowNum, $row['kip_kuliah']);
            $rowNum++;
        }

        // Styling header
        $sheet->getStyle('A1:V1')->getFont()->setBold(true);
        $sheet->getStyle('A1:V1')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('FFFFFF00');
        $sheet->getStyle('A1:V' . ($rowNum - 1))->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
                ]
            ]
        ]);



        // Auto size
        foreach (range('A', 'V') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Output
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="DataPTN.xlsx"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');

        exit();
    }

    public function clearall()
    {
        // Load semua model
        $prestasiModel    = new \App\Models\Prestasi();
        $uploadModel      = new \App\Models\Upload();
        $universitasModel = new \App\Models\Universitas();
        $biodataModel     = new \App\Models\Biodata();
        $userModel        = new \App\Models\UserModel();

        // Koneksi database
        $db = \Config\Database::connect();

        // Matikan foreign key check sementara
        $db->query('SET FOREIGN_KEY_CHECKS = 0');

        // Hapus tabel anak dulu
        $prestasiModel->truncate();
        $uploadModel->truncate();
        $universitasModel->truncate();

        // Hapus tabel induk biodata
        $biodataModel->truncate();

        // Hapus user tapi sisakan yang user = 0
        $db->table('user')
            ->where('user <>', 0) // hapus semua kecuali user = 0
            ->delete();

        // Nyalakan lagi foreign key check
        $db->query('SET FOREIGN_KEY_CHECKS = 1');

        // Pesan sukses
        session()->setFlashdata('message', 'Semua data berhasil dihapus, kecuali user = 0.');
        return redirect()->to('/PKHLolosPTN');
    }

    public function import()
    {
        $userModel        = new \App\Models\UserModel();
        $biodataModel     = new \App\Models\Biodata();
        $universitasModel = new \App\Models\Universitas();
        $uploadModel      = new \App\Models\Upload();

        $file = $this->request->getFile('fileexcel');
        $file->move(ROOTPATH . 'public/uploads');
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load(ROOTPATH . 'public/uploads/' . $file->getName());
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        foreach ($sheetData as $index => $row) {
            if ($index == 0) continue; // Skip header

            $user_id  = $row[1];
            $id_siswa = $row[5];
            // =========================
            // 1️⃣ USER TABLE
            // =========================
            // $username = trim($row[2] ?? '');
            // if ($username === '') {
            //     // Skip baris yang username kosong
            //     continue;
            // }

            $userData = [
                'user_id'  => $user_id,
                'username' => $row[2],
                'password' => password_hash($row[3], PASSWORD_BCRYPT),
                'user'     => $row[4]
            ];

            $existingUser = $userModel->where('user_id', $user_id)->first();
            if ($existingUser) {
                $userModel->update($user_id, $userData);
            } else {
                $userModel->insert($userData);
            }

            // =========================
            // 2️⃣ BIODATA TABLE
            // =========================
            $biodataData = [
                'id_siswa'         => $id_siswa,
                'email_address'    => $row[6],
                'nama'             => $row[7],
                'no_pkh'           => $row[8],
                'id_pendampingpkh' => $row[9],
                'id_kabupaten'     => $row[10],
                'id_kecamatan'     => $row[11],
                'id_desa'          => $row[12],
                'id_SMA'           => $row[13],
                'nama_ibu'         => $row[14],
                'no_whatshap'      => $row[15],
                'user_id'          => $user_id
            ];

            $existingBiodata = $biodataModel->where('user_id', $user_id)->first();
            if ($existingBiodata) {
                $biodataModel->where('user_id', $user_id)->set($biodataData)->update();
            } else {
                $biodataModel->insert($biodataData);
            }

            // =========================
            // 3️⃣ UNIVERSITAS TABLE
            // =========================
            $universitasData = [
                'id_siswa'             => $id_siswa,
                'id_daftaruniversitas' => $row[16],
                'id_daftarprodi'       => $row[17],
                'id_jalurmasuk'        => $row[18],
                'tahun_masuk'          => $row[19],
                'kip_sma'              => $row[20],
                'kip_kuliah'           => $row[21],
                'user_id'              => $user_id
            ];

            $existingUniversitas = $universitasModel->where('id_siswa', $id_siswa)->first();
            if ($existingUniversitas) {
                $universitasModel->where('id_siswa', $id_siswa)->set($universitasData)->update();
            } else {
                $universitasModel->insert($universitasData);
            }

            // =========================
            // 4️⃣ UPLOAD TABLE
            // =========================
            $uploadData = [
                'id_siswa'      => $id_siswa,
                'sktm'          => $row[22],
                'ktp_ortu'      => $row[23],
                'sk_pendapatan' => $row[24],
                'dokumen'       => $row[25],
                'user_id'       => $user_id
            ];

            $existingUpload = $uploadModel->where('id_siswa', $id_siswa)->first();
            if ($existingUpload) {
                $uploadModel->where('id_siswa', $id_siswa)->set($uploadData)->update();
            } else {
                $uploadModel->insert($uploadData);
            }
        }

        session()->setFlashdata('message', 'Data berhasil diimport/update.');
        return redirect()->to('/PKHLolosPTN');
    }

    public function edit($id_siswa)
    {
        $db = \Config\Database::connect();

        $builder = $db->table('biodata b');
        $builder->select('
            b.id_siswa, 
            b.email_address, 
            b.nama, 
            b.no_whatshap, 
            b.no_pkh, 
            b.id_kabupaten, 
            b.id_kecamatan, 
            b.id_desa, 
            b.id_SMA, 
            b.id_pendampingpkh,   
            kab.nama_kabupaten AS kabupaten_kota, 
            kec.nama_kecamatan AS kecamatan, 
            des.nama_desa AS desa, 
            sma.nama_SMA AS asal_sekolah, 
            b.nama_ibu,
            jalur.nama_jalurmasuk AS jalur_masukptn,
            univ.nama_daftaruniversitas AS universitas,
            prodi.nama_daftarprodi AS program_studi,
            p_pkh.nama_pendamping_pkh AS pendampingpkh,
            u.id_jalurmasuk,
            u.id_daftaruniversitas,
            u.id_daftarprodi, 
            u.kip_sma AS kip_sma,
            u.kip_kuliah AS kip_kuliah,
            u.tahun_masuk AS tahun_masuk, 
            us.username AS username,
            us.password AS password,
            us.user_id AS user_id
        ');
        $builder->join('user us', 'us.user_id = b.user_id', 'left');
        $builder->join('universitas u', 'u.user_id = b.user_id', 'left');
        $builder->join('daftaruniversitas univ', 'univ.id_daftaruniversitas = u.id_daftaruniversitas', 'left');
        $builder->join('daftarprodi prodi', 'prodi.id_daftarprodi = u.id_daftarprodi', 'left');
        $builder->join('daftarjalurmasuk jalur', 'jalur.id_jalurmasuk = u.id_jalurmasuk', 'left');
        $builder->join('daftarkabupaten kab', 'kab.id_kabupaten = b.id_kabupaten', 'left');
        $builder->join('daftarkecamatan kec', 'kec.id_kecamatan = b.id_kecamatan', 'left');
        $builder->join('daftardesa des', 'des.id_desa = b.id_desa', 'left');
        $builder->join('daftarsma sma', 'sma.id_SMA = b.id_SMA', 'left');
        $builder->join('daftarpendampingpkh p_pkh', 'p_pkh.id_pendampingpkh = b.id_pendampingpkh', 'left');

        $builder->where('b.id_siswa', $id_siswa);
        $userId = $db->table('biodata')
            ->select('user_id')
            ->where('id_siswa', $id_siswa)
            ->get()
            ->getRow()
            ->user_id;

        $PTN = $builder->get()->getRowArray();
        $modelprestasi = new Prestasi();
        $prestasi = $modelprestasi->where('user_id', $userId)->findAll();

        if (!$PTN) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data dengan ID $id_siswa tidak ditemukan");
        }

        $modelPendamping = new DaftarPendampingPKH();
        $pendampingList = $modelPendamping->select('id_pendampingpkh, nama_pendamping_pkh')->findAll();

        $modelKabupaten = new DaftarKabupaten();
        $kabupatenList = $modelKabupaten->select('id_kabupaten, nama_kabupaten')->findAll();

        $modelKecamatan = new DaftarKecamatan();
        $kecamatanList = $modelKecamatan->select('id_kecamatan, nama_kecamatan')->findAll();

        $modelDesa = new DaftarDesa();
        $desaList = $modelDesa->select('id_desa, nama_desa')->findAll();
        $modelBiodata = new Biodata();
        $data['biodata'] = $modelBiodata->find($id_siswa);
        $data['kabupatenList'] = $modelKabupaten->findAll();

        if (!empty($data['biodata']['id_kabupaten'])) {
            $data['kecamatanList'] = $modelKecamatan
                ->where('id_kabupaten', $data['biodata']['id_kabupaten'])
                ->findAll();
        } else {
            $data['kecamatanList'] = [];
        }

        if (!empty($data['biodata']['id_kecamatan'])) {
            $data['desaList'] = $modelDesa
                ->where('id_kecamatan', $data['biodata']['id_kecamatan'])
                ->findAll();
        } else {
            $data['desaList'] = [];
        }

        $modelSMA = new DaftarSMA();
        $SMAList = $modelSMA->select('id_SMA, nama_SMA')->findAll();

        $modelDaftarUniv  = new DaftarUniversitas();
        $listUniversitas = $modelDaftarUniv->findAll();

        $modelProdi       = new DaftarProdi();
        $listProdi = $modelProdi->findAll();

        $modelJalur       = new DaftarJalurMasuk();
        $listJalurMasuk  = $modelJalur->findAll();

        $modelUniversitas = new Universitas();
        $univData = $modelUniversitas->findAll($id_siswa);

        $upload = new Upload();
        $dokumen = $upload->where('id_siswa', $id_siswa)->first();


        return view('_admin/editlolosptn', [
            'data' => $data,
            'prestasi' => $prestasi,
            'dokumen' => $dokumen,
            'title' => 'PKH Lolos PTN',
            'title2' => 'Edit Data Lolos PTN',
            'PTN' => $PTN,
            'pendampingList' => $pendampingList,
            'kabupatenList' => $kabupatenList,
            'kecamatanList' => $kecamatanList,
            'desaList' => $desaList,
            'SMAList' => $SMAList,
            'listUniversitas' => $listUniversitas,
            'listProdi'       => $listProdi,
            'listJalurMasuk'  => $listJalurMasuk,
            'jalurMasukSelected' => $univData['id_jalurmasuk'] ?? '',
            'universitasListSelected' => $univData['id_daftaruniversitas'] ?? '',
            'prodiListSelected'       => $univData['id_daftarprodi'] ?? '',
            'tahunMasuk'              => $univData['tahun_masuk'] ?? '',
            'kipSmaStatus'            => isset($univData['kip_sma']) && $univData['kip_sma'] == 1 ? 'Ya' : 'Tidak',
            'kipKuliahStatus'         => isset($univData['kip_kuliah']) && $univData['kip_kuliah'] == 1 ? 'Ya' : 'Tidak',
        ]);
    }

    public function getKecamatan($idKabupaten)
    {
        $model = new DaftarKecamatan();
        $data = $model->where('id_kabupaten', $idKabupaten)->findAll();
        return $this->response->setJSON($data);
    }

    public function getDesa($idKecamatan)
    {
        $model = new DaftarDesa();
        $data = $model->where('id_kecamatan', $idKecamatan)->findAll();
        return $this->response->setJSON($data);
    }

    public function update($id_siswa)
    {
        $db = \Config\Database::connect();
        $biodataModel     = new \App\Models\Biodata();
        $universitasModel = new \App\Models\Universitas();
        $uploadModel      = new \App\Models\Upload();

        // --- Ambil POST dari form ---
        $biodataData = [
            'email_address'    => $this->request->getPost('email_address'),
            'nama'             => $this->request->getPost('nama'),
            'no_whatshap'      => $this->request->getPost('no_whatshap'),
            'nama_ibu'         => $this->request->getPost('nama_ibu'),
            'id_kabupaten'     => $this->request->getPost('id_kabupaten'),
            'id_kecamatan'     => $this->request->getPost('id_kecamatan'),
            'id_desa'          => $this->request->getPost('id_desa'),
            'id_SMA'           => $this->request->getPost('id_SMA'),
            'id_pendampingpkh' => $this->request->getPost('id_pendampingpkh'),
            'no_pkh'           => $this->request->getPost('no_pkh'),
        ];


        $universitasData = [
            'kip_sma'              => $this->request->getPost('kip_sma') ? 1 : 0,
            'kip_kuliah'           => $this->request->getPost('kip_kuliah') ? 1 : 0,
            'id_jalurmasuk'        => $this->request->getPost('id_jalurmasuk'),
            'id_daftaruniversitas' => $this->request->getPost('id_daftaruniversitas'),
            'id_daftarprodi'       => $this->request->getPost('id_daftarprodi'),
            'tahun_masuk'          => $this->request->getPost('tahun_masuk'),
        ];


        // 🚨 Error handling: pastikan ada data
        if (empty(array_filter($biodataData)) && empty(array_filter($universitasData)) && !$this->request->getFiles()) {
            session()->setFlashdata('error', 'There is no data to insert.');
            return redirect()->back();
        }

        // --- Update tabel biodata ---
        $biodataModel->update($id_siswa, $biodataData);

        $user = $biodataModel
            ->select('user_id')
            ->where('id_siswa', $id_siswa)
            ->first();

        $userId = $user['user_id'];

        $existing = $universitasModel->where('user_id', $userId)->first();

        if ($existing) {
            $universitasModel
                ->where('user_id', $userId)
                ->set($universitasData)
                ->update();
        } else {
            $universitasData['user_id'] = $userId;
            $universitasModel->insert($universitasData);
        }

        // --- Upload dokumen ---
        $namaSiswaSafe = preg_replace('/[^A-Za-z0-9_\-]/', '_', $this->request->getPost('nama'));
        $timestamp     = date('Ymd_His');
        $uploadData    = [];

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


        //PRESTASI
        $id_prestasisiswa = $this->request->getPost('id_prestasisiswa');
        // Ambil data prestasi yang sesuai user dan siswa
        $id_prestasisiswa = $this->request->getPost('id_prestasisiswa');

        if ($id_prestasisiswa) {  // <-- hanya jalan kalau ada data prestasi
            $prestasi = $this->prestasi
                ->where('id_prestasisiswa', $id_prestasisiswa)
                ->where('user_id', $userId)
                ->where('id_siswa', $id_siswa)
                ->first();

            if ($prestasi) {
                $nama_prestasi   = $this->request->getPost('nama_prestasi');
                $tingkat_prestasi = $this->request->getPost('tingkat_prestasi');
                $tahun_prestasi   = $this->request->getPost('tahun_prestasi');

                $prestasiFile = $this->request->getFile('sertifikat_prestasi');
                $fileName = $prestasi['sertifikat_prestasi'];

                if ($prestasiFile && $prestasiFile->isValid() && !$prestasiFile->hasMoved()) {
                    $ext = $prestasiFile->getClientExtension();
                    $fileName = $tahun_prestasi . '_' . preg_replace('/\s+/', '_', strtolower($nama_prestasi)) . '_' . time() . '.' . $ext;
                    $prestasiFile->move(FCPATH . 'gambarSertifikat/', $fileName);

                    if (file_exists(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi'])) {
                        unlink(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi']);
                    }
                }

                $this->prestasi->update($id_prestasisiswa, [
                    'nama_prestasi' => $nama_prestasi,
                    'tingkat_prestasi' => $tingkat_prestasi,
                    'tahun_prestasi' => $tahun_prestasi,
                    'sertifikat_prestasi' => $fileName
                ]);
            }
        }

        session()->setFlashdata('message', 'Data berhasil diupdate.');
        return redirect()->to(base_url('PKHLolosPTN/detail/' . $id_siswa));
    }

    public function updatePrestasi($id_prestasisiswa)
    {
        $prestasiModel = new \App\Models\Prestasi();

        // Ambil data prestasi dari tabel berdasarkan id_prestasisiswa
        $prestasi = $prestasiModel->find($id_prestasisiswa);
        $user_id  = $prestasi['user_id'];
        $id_siswa = $prestasi['id_siswa'];

        // var_dump($id_prestasisiswa);
        // var_dump($user_id);
        // var_dump($id_siswa);
        // die();
        if ($id_prestasisiswa) {  // <-- hanya jalan kalau ada data prestasi
            $prestasi = $this->prestasi
                ->where('id_prestasisiswa', $id_prestasisiswa)
                ->where('user_id', $user_id)
                ->first();

            if ($prestasi) {
                $nama_prestasi   = $this->request->getPost('nama_prestasi');
                $tingkat_prestasi = $this->request->getPost('tingkat_prestasi');
                $tahun_prestasi   = $this->request->getPost('tahun_prestasi');

                $prestasiFile = $this->request->getFile('sertifikat_prestasi');
                $fileName = $prestasi['sertifikat_prestasi'];

                if ($prestasiFile && $prestasiFile->isValid() && !$prestasiFile->hasMoved()) {
                    $ext = $prestasiFile->getClientExtension();
                    $fileName = $tahun_prestasi . '_' . preg_replace('/\s+/', '_', strtolower($nama_prestasi)) . '_' . time() . '.' . $ext;
                    $prestasiFile->move(FCPATH . 'gambarSertifikat/', $fileName);

                    if (file_exists(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi'])) {
                        unlink(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi']);
                    }
                }

                $this->prestasi->update($id_prestasisiswa, [
                    'nama_prestasi' => $nama_prestasi,
                    'tingkat_prestasi' => $tingkat_prestasi,
                    'tahun_prestasi' => $tahun_prestasi,
                    'sertifikat_prestasi' => $fileName
                ]);
            }
        }

        session()->setFlashdata('message', 'Data berhasil diupdate.');
        return redirect()->to('/PKHLolosPTN/edit/' . $id_siswa);
    }

    public function storeAddPrestasi($id_siswa)
    {
        $user_id    = $this->request->getPost('user_id');
        $id_siswa    = $this->request->getPost('id_siswa');
        $nama_prestasi    = $this->request->getPost('nama_prestasi');
        $tingkat_prestasi = $this->request->getPost('tingkat_prestasi');
        $tahun_prestasi   = $this->request->getPost('tahun_prestasi');

        // Ambil file upload
        $prestasiFile = $this->request->getFile('sertifikat_prestasi');

        if ($prestasiFile && $prestasiFile->isValid() && !$prestasiFile->hasMoved()) {
            $ext = $prestasiFile->getClientExtension();
            $fileName = $tahun_prestasi . '_' . preg_replace('/\s+/', '_', strtolower($nama_prestasi)) . '_' . time() . '.' . $ext;

            // Pindahkan file
            $prestasiFile->move(FCPATH . 'gambarSertifikat/', $fileName);

            // Simpan ke database
            $this->prestasi->insert([
                'user_id'             => $user_id,
                'id_siswa'            => $id_siswa, // tambahkan ini
                'nama_prestasi'       => $nama_prestasi,
                'tingkat_prestasi'    => $tingkat_prestasi,
                'tahun_prestasi'      => $tahun_prestasi,
                'sertifikat_prestasi' => $fileName
            ]);

            session()->setFlashdata('success', 'Data Prestasi Kamu berhasil disimpan!');
        } else {
            session()->setFlashdata('error', 'Gagal mengupload file sertifikat!');
        }

        return redirect()->to('/PKHLolosPTN/edit/' . $id_siswa);
    }

    public function deletePrestasi($id_prestasisiswa)
    {
        $prestasiModel = new \App\Models\Prestasi();

        // ambil data prestasi sesuai primaryKey
        $prestasi = $prestasiModel->find($id_prestasisiswa);

        $user_id = $prestasi['user_id'];
        $id_siswa = $prestasi['id_siswa'];
        // Ambil data prestasi yang sesuai user
        $prestasi = $this->prestasi
            ->where('id_prestasisiswa', $id_prestasisiswa)
            ->where('user_id', $user_id)
            ->where('id_siswa', $id_siswa)
            ->first();

        if (!$prestasi) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data prestasi tidak ditemukan.');
        }

        // Hapus file sertifikat jika ada
        if (!empty($prestasi['sertifikat_prestasi']) && file_exists(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi'])) {
            unlink(FCPATH . 'gambarSertifikat/' . $prestasi['sertifikat_prestasi']);
        }

        // Hapus data dari database
        $this->prestasi->delete($id_prestasisiswa);

        session()->setFlashdata('success', 'Data prestasi berhasil dihapus!');
        return redirect()->to('/PKHLolosPTN/edit/' . $id_siswa);
    }
}
