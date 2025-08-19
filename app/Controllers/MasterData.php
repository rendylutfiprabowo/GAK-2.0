<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DaftarDesa;
use App\Models\DaftarJalurMasuk;
use App\Models\DaftarKabupaten;
use App\Models\DaftarKecamatan;
use App\Models\DaftarPendampingPKH;
use App\Models\DaftarProdi;
use App\Models\DaftarSMA;
use App\Models\DaftarUniversitas;

class Masterdata extends BaseController
{
    protected $desaModel;
    protected $jalurmasukModel;
    protected $kabupatenModel;
    protected $kecamatanModel;
    protected $pendampingPKHModel;
    protected $prodiModel;
    protected $SMAModel;
    protected $universitasModel;

    public function __construct()
    {
        $this->desaModel          = new DaftarDesa();
        $this->jalurmasukModel    = new DaftarJalurMasuk();
        $this->kabupatenModel     = new DaftarKabupaten();
        $this->kecamatanModel     = new DaftarKecamatan();
        $this->pendampingPKHModel = new DaftarPendampingPKH();
        $this->prodiModel         = new DaftarProdi();
        $this->SMAModel           = new DaftarSMA();
        $this->universitasModel   = new DaftarUniversitas();
    }

    public function index()
    {
        $data = [
            'title'              => 'Master Data',
            'title2'            => 'Master Data',
            'daftardesa'        => $this->desaModel->getWithDetail(),
            'daftarjalur'      => $this->jalurmasukModel->findAll(),
            'daftarkabupaten'  => $this->kabupatenModel->findAll(),
            'daftarkecamatan' => $this->kecamatanModel->getWithKabupaten(),
            'daftarpkh'        => $this->pendampingPKHModel->getWithKabupaten(),
            'daftarprodi'      => $this->prodiModel->findAll(),
            'daftarsma'        => $this->SMAModel->getWithWilayah(),
            'daftaruniversitas' => $this->universitasModel->findAll(),
        ];
 
        return view('_admin/masterdata', $data);
    }

    public function desaUpdate($id)
    {
        $this->desaModel->update($id, [
            'nama_desa' => $this->request->getPost('nama_desa'),

        ]);

        return redirect()->to('/MasterData')->with('success', 'Data berhasil diupdate');
    }

    public function desaDelete($id)
    {
        $this->desaModel->delete($id);
        return redirect()->to('/MasterData')->with('success', 'Data berhasil dihapus');
    }

    public function jalurMasukUpdate($id)
    {
        $this->jalurmasukModel->update($id, [
            'nama_jalurmasuk' => $this->request->getPost('nama_jalurmasuk'),
        ]);

        return redirect()->to('/MasterData')->with('success', 'Data berhasil diupdate');
    }

    public function jalurMasukDelete($id)
    {
        $this->jalurmasukModel->delete($id);
        return redirect()->to('/MasterData')->with('success', 'Data berhasil dihapus');
    }

    public function kecamatanUpdate($id)
    {
        $this->kecamatanModel->update($id, [
            'nama_kecamatan' => $this->request->getPost('nama_kecamatan'),
        ]);

        return redirect()->to('/MasterData')->with('success', 'Data berhasil diupdate');
    }

    public function kecamatanDelete($id)
    {
        $this->kecamatanModel->delete($id);
        return redirect()->to('/MasterData')->with('success', 'Data berhasil dihapus');
    }

    public function pendampingpkhUpdate($id)
    {
        $this->pendampingPKHModel->update($id, [
            'nama_pendamping_pkh' => $this->request->getPost('nama_pendamping_pkh'),
            'no_tel' => $this->request->getPost('no_tel'),
            'alamat' => $this->request->getPost('alamat'),
            'id_kabupaten' => $this->request->getPost('id_kabupaten'),
        ]);

        return redirect()->to('/MasterData')->with('success', 'Data berhasil diupdate');
    }

    public function pendampingpkhDelete($id)
    {
        $this->pendampingPKHModel->delete($id);
        return redirect()->to('/MasterData')->with('success', 'Data berhasil dihapus');
    }

    public function kabupatenUpdate($id)
    {
        $this->kabupatenModel->update($id, [
            'nama_kabupaten' => $this->request->getPost('nama_kabupaten'),
        ]);

        return redirect()->to('/MasterData')->with('success', 'Data berhasil diupdate');
    }

    public function kabupatenDelete($id)
    {
        $this->kabupatenModel->delete($id);
        return redirect()->to('/MasterData')->with('success', 'Data berhasil dihapus');
    }

    public function prodiUpdate($id)
    {
        $this->prodiModel->update($id, [
            'nama_daftarprodi' => $this->request->getPost('nama_daftarprodi'),
        ]);

        return redirect()->to('/MasterData')->with('success', 'Data berhasil diupdate');
    }

    public function prodiDelete($id)
    {
        $this->prodiModel->delete($id);
        return redirect()->to('/MasterData')->with('success', 'Data berhasil dihapus');
    }


    public function SMAUpdate($id)
    {
        $this->SMAModel->update($id, [
            'nama_SMA' => $this->request->getPost('nama_SMA'),
            'id_kabupaten' => $this->request->getPost('id_kabupaten'),
        ]);

        return redirect()->to('/MasterData')->with('success', 'Data berhasil diupdate');
    }

    public function SMADelete($id)
    {
        $this->SMAModel->delete($id);
        return redirect()->to('/MasterData')->with('success', 'Data berhasil dihapus');
    }

    public function daftaruniversitasUpdate($id)
    {
        $this->universitasModel->update($id, [
            'nama_daftaruniversitas' => $this->request->getPost('nama_daftaruniversitas'),
        ]);

        return redirect()->to('/MasterData')->with('success', 'Data berhasil diupdate');
    }

    public function daftaruniversitasDelete($id)
    {
        $this->universitasModel->delete($id);
        return redirect()->to('/MasterData')->with('success', 'Data berhasil dihapus');
    }
}
