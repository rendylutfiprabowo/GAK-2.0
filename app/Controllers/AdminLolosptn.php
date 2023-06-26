<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LolosPTN;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdminLolosptn extends BaseController
{

    public function index()
    {
        if (session()->get('user') == '0') {
            $detailModel = new Lolosptn();
            $PTN = $detailModel->findAll();
            $data = [
                'title' => 'PKH Lolos PTN',
                'title2' => '',
                'PTN' => $PTN,
            ];
            return view('_admin/lolosptn', $data);
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function detail($id)
    {
        if (session()->get('user') == '0') {
            $detailModel = new Lolosptn();
            $PTN = $detailModel->find($id);
            $data = [
                'title' => 'PKH Lolos PTN',
                'title2' => 'Detail',
                'PTN' => $PTN,
            ];
            if (session()->logged_in)  return view('_admin/detailadmin', $data);
            else return redirect()->to('login');
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function edit($id)
    {
        if (session()->get('user') == '0') {
            if (session()->logged_in) {
                $detailModel = new Lolosptn();
                $PTN = $detailModel->find($id);
                $data = [
                    'title' => 'PKH Lolos PTN',
                    'title2' => 'Edit',
                    'PTN' => $PTN,
                ];
                return view('_admin/editadmin', $data);
            } else return redirect()->to('login');
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function update($id)
    {
        if (session()->get('user') == '0') {
            $email_address   = $this->request->getPost('email_address');
            $nama   = $this->request->getPost('nama');
            $no_whatshap   = $this->request->getPost('no_whatshap');
            $provinsi   = $this->request->getPost('provinsi');
            $kabupaten_kota   = $this->request->getPost('kabupaten_kota');
            $kecamatan  = $this->request->getPost('kecamatan');
            $desa   = $this->request->getPost('desa');
            $asal_sekolah   = $this->request->getPost('asal_sekolah');
            $no_pkh  = $this->request->getPost('no_pkh');
            $jalur_masukptn   = $this->request->getPost('jalur_masukptn');
            $universitas   = $this->request->getPost('universitas');
            $program_studi   = $this->request->getPost('program_studi');
            $status_kip   = $this->request->getPost('status_kip');

            $data = [
                'email_address' => $email_address,
                'nama' => $nama,
                'no_whatshap' => $no_whatshap,
                'provinsi' => $provinsi,
                'kabupaten_kota' => $kabupaten_kota,
                'kecamatan' => $kecamatan,
                'desa' => $desa,
                'asal_sekolah' => $asal_sekolah,
                'no_pkh' => $no_pkh,
                'jalur_masukptn' => $jalur_masukptn,
                'universitas' => $universitas,
                'program_studi' => $program_studi,
                'status_kip' => $status_kip,

            ];
            $userModel = new Lolosptn();

            $result =  $userModel->update($id, $data);
            if ($result) {
                session()->setFlashdata('message', 'Di Update');
                return $this->detail($id);
            } else {
                return $this->detail($id);
            }
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function delete($id)
    {
        if (session()->get('user') == '0') {
            $AdminModel = new Lolosptn();
            $AdminModel->delete($id);

            if ($AdminModel) {
                session()->setFlashdata('message', 'Di Hapus');
                return redirect()->to('/PKHLolosPTN');
            }
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function clearall()
    {
        if (session()->get('user') == '0') {
            $AdminModel = new Lolosptn();
            $AdminModel->truncate();
            session()->setFlashdata('message', 'Di Hapus Semua');
            return redirect()->to('/PKHLolosPTN');
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function export()
    {
        if (session()->get('user') == '0') {
            $detailModel = new Lolosptn();

            $pkhlolosptn = $detailModel->findAll();

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'No');
            $sheet->setCellValue('B1', 'Email Address');
            $sheet->setCellValue('C1', 'Nama');
            $sheet->setCellValue('D1', 'No WhatsApp');
            $sheet->setCellValue('E1', 'Provinsi');
            $sheet->setCellValue('F1', 'Kabupaten/kota');
            $sheet->setCellValue('G1', 'Kecamatan');
            $sheet->setCellValue('H1', 'Desa');
            $sheet->setCellValue('I1', 'Asal Sekolah');
            $sheet->setCellValue('J1', 'No PKH');
            $sheet->setCellValue('K1', 'Jalur Masuk PTN');
            $sheet->setCellValue('L1', 'Universitas');
            $sheet->setCellValue('M1', 'Program Studi');
            $sheet->setCellValue('N1', 'Status Daftar KIP');

            $column = 2;
            foreach ($pkhlolosptn as $dt) {
                $sheet->setCellValue('A' . $column, ($column - 1));
                $sheet->setCellValue('B' . $column, $dt['email_address']);
                $sheet->setCellValue('C' . $column, $dt['nama']);
                $sheet->setCellValue('D' . $column, $dt['no_whatshap']);
                $sheet->setCellValue('E' . $column, $dt['provinsi']);
                $sheet->setCellValue('F' . $column, $dt['kabupaten_kota']);
                $sheet->setCellValue('G' . $column, $dt['kecamatan']);
                $sheet->setCellValue('H' . $column, $dt['desa']);
                $sheet->setCellValue('I' . $column, $dt['asal_sekolah']);
                $sheet->setCellValue('J' . $column, $dt['no_pkh']);
                $sheet->setCellValue('K' . $column, $dt['jalur_masukptn']);
                $sheet->setCellValue('L' . $column, $dt['universitas']);
                $sheet->setCellValue('M' . $column, $dt['program_studi']);
                $sheet->setCellValue('N' . $column, $dt['status_kip']);
                $column++;
            }

            $sheet->getStyle('A1:N1')->getFont()->setBold(true);
            $sheet->getstyle('A1:N1')->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FFFFFF00');
            $styleArray = [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => 'FF000000'],
                    ],
                ],
            ];
            $sheet->getStyle('A1:N' . ($column - 1))->applyFromArray($styleArray);

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);
            $sheet->getColumnDimension('M')->setAutoSize(true);
            $sheet->getColumnDimension('N')->setAutoSize(true);

            $writer = new Xlsx($spreadsheet);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename=PKHLolosPTN.Xlsx');
            header('Cache-Control: max-age=0');
            $writer->save('php://output');
            exit();
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }

    public function import()
    {
        if (session()->get('user') == '0') {
            $detailModel = new Lolosptn();

            $file = $this->request->getFile('fileexcel');
            $file->move(ROOTPATH . 'public/uploads');
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $spreadsheet = $reader->load(ROOTPATH . 'public/uploads/' . $file->getName());
            $sheetData = $spreadsheet->getActiveSheet()->toArray();
            $data = [];
            $i = 1;
            $x = 0;
            foreach ($sheetData as $dt) {
                $x++;
                if ($x == 1) {
                    continue;
                }
                $data[$i]['email_address'] = $dt[1];
                $data[$i]['nama'] = $dt[2];
                $data[$i]['no_whatshap'] = $dt[3];
                $data[$i]['provinsi'] = $dt[4];
                $data[$i]['kabupaten_kota'] = $dt[5];
                $data[$i]['kecamatan'] = $dt[6];
                $data[$i]['desa'] = $dt[7];
                $data[$i]['asal_sekolah'] = $dt[8];
                $data[$i]['no_pkh'] = $dt[9];
                $data[$i]['jalur_masukptn'] = $dt[10];
                $data[$i]['universitas'] = $dt[11];
                $data[$i]['program_studi'] = $dt[12];
                $data[$i]['status_kip'] = $dt[13];
                $i++;
            }

            $import = $detailModel->insertBatch($data);
            if ($import) {
                session()->setFlashdata('message', 'Di Import');
                return redirect()->to('/PKHLolosPTN');
            }
        } elseif (session()->get('user') == '1') {
            return redirect()->to(base_url('Biodata'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
