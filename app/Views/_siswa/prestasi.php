<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

<div class="container-fluid py-4">
  <div class="card mb-3">
    <div class="card-body p-3">
      <div class="container-fluid">
        <div class="table-responsive">
          <h1 class="mt-3">DATA PRESTASI</h1>
          <p style="border-bottom: 2px solid gray;">Jika anda <b>memiliki prestasi, mohon isi </b>form berikut sesuai dengan data prestasi anda!. <b>Jika tidak ada, mohon abaikan</b>! Terima Kasih!</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="/Prestasi/Add" class="btn btn-primary me-md-2">Tambah</a>
          </div>
          <table class="table align-items-center mb-0" style="border: 1cm;">
            <thead class="text-center">
              <tr>
                <th class="text-uppercase">No</th>
                <th class="text-uppercase">Nama Prestasi</th>
                <th class="text-uppercase">Tingkat Prestasi</th>
                <th class="text-uppercase">Tahun Prestasi</th>
                <th class="text-uppercase">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              if (!empty($prestasi)): ?>
                <?php foreach ($prestasi as $row): ?>
                  <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= esc($row['nama_prestasi']) ?></td>
                    <td class="text-center"><?= esc($row['tingkat_prestasi']) ?></td>
                    <td class="text-center"><?= esc($row['tahun_prestasi']) ?></td>
                    <td class="text-center">
                      <a href="<?= base_url('gambarSertifikat/' . $row['sertifikat_prestasi']) ?>" target="_blank">
                        <i class="material-icons mx-1 my-1">visibility</i>
                      </a>
                      <a href="<?= base_url('Prestasi/Edit/' . $row['id_prestasisiswa']) ?>">
                        <i class="material-icons mx-1 my-1">edit</i>
                      </a>
                      <a href="<?= base_url('Prestasi/Delete/' . $row['id_prestasisiswa']) ?>" onclick="return confirm('Yakin hapus?')">
                        <i class="material-icons mx-1 my-1">delete</i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="4" class="text-center">Belum ada data prestasi</td>
                </tr>
              <?php endif; ?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /.container-fluid -->

<?= $this->endSection(); ?>