<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel-desa').DataTable({
            "lengthMenu": [5, 10, 25, 50, 100],
            "pageLength": 5 // default awal tampil 5
        });
    });
    $(document).ready(function() {
        $('#tabel-jalurmasuk').DataTable({
            "columnDefs": [{
                    "width": "10px",
                    "targets": 0
                }, // Kolom NO
            ],
            "autoWidth": false, // jangan biarkan DataTables atur otomatis
            "scrollX": false // jangan kasih horizontal scroll
        });
    });
    $(document).ready(function() {
        $('#tabel-kabupaten').DataTable({
            "lengthMenu": [5, 10, 25, 50, 100],
            "pageLength": 5, // default awal tampil 5
            "columnDefs": [{
                    "width": "10px",
                    "targets": 0
                }, // Kolom NO
            ],
            "autoWidth": false, // jangan biarkan DataTables atur otomatis
            "scrollX": false // jangan kasih horizontal scroll
        });
    });
    $(document).ready(function() {
        $('#tabel-kecamatan').DataTable({
            "lengthMenu": [5, 10, 25, 50, 100],
            "pageLength": 5, // default awal tampil 5
            "columnDefs": [{
                    "width": "10px",
                    "targets": 0
                }, // Kolom NO
            ],
            "autoWidth": false, // jangan biarkan DataTables atur otomatis
            "scrollX": false // jangan kasih horizontal scroll
        });
    });
    $(document).ready(function() {
        $('#tabel-pendampingpkh').DataTable({
            "columnDefs": [{
                    "width": "10px",
                    "targets": 0
                }, // Kolom NO
            ],
            "autoWidth": false, // jangan biarkan DataTables atur otomatis
            "scrollX": false // jangan kasih horizontal scroll
        });
    });
    $(document).ready(function() {
        $('#tabel-prodi').DataTable({
            "lengthMenu": [5, 10, 25, 50, 100],
            "pageLength": 5, // default awal tampil 5
            "columnDefs": [{
                    "width": "10px",
                    "targets": 0
                }, // Kolom NO
            ],
            "autoWidth": false, // jangan biarkan DataTables atur otomatis
            "scrollX": false // jangan kasih horizontal scroll
        });
    });
    $(document).ready(function() {
        $('#tabel-sma').DataTable({
            "lengthMenu": [5, 10, 25, 50, 100],
            "pageLength": 5, // default awal tampil 5
            "columnDefs": [{
                    "width": "10px",
                    "targets": 0
                }, // Kolom NO
            ],
            "autoWidth": false, // jangan biarkan DataTables atur otomatis
            "scrollX": false // jangan kasih horizontal scroll
        });
    });
    $(document).ready(function() {
        $('#tabel-universitas').DataTable({
            "lengthMenu": [5, 10, 25, 50, 100],
            "pageLength": 5, // default awal tampil 5
            "columnDefs": [{
                    "width": "10px",
                    "targets": 0
                }, // Kolom NO
            ],
            "autoWidth": false, // jangan biarkan DataTables atur otomatis
            "scrollX": false // jangan kasih horizontal scroll
        });
    });
</script>

<div class="container-fluid my-4">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-desa-tab" data-bs-toggle="tab" data-bs-target="#nav-desa" type="button" role="tab" aria-controls="nav-desa" aria-selected="true">DESA</button>
            <button class="nav-link text-uppercase" id="nav-jalurmasuk-tab" data-bs-toggle="tab" data-bs-target="#nav-jalurmasuk" type="button" role="tab" aria-controls="nav-jalurmasuk" aria-selected="true">jalur masuk</button>
            <button class="nav-link text-uppercase" id="nav-kabupaten-tab" data-bs-toggle="tab" data-bs-target="#nav-kabupaten" type="button" role="tab" aria-controls="nav-kabupaten" aria-selected="true">kabupaten</button>
            <button class="nav-link text-uppercase" id="nav-kecamatan-tab" data-bs-toggle="tab" data-bs-target="#nav-kecamatan" type="button" role="tab" aria-controls="nav-kecamatan" aria-selected="true">kecamatan</button>
            <button class="nav-link text-uppercase" id="nav-pendampingpkh-tab" data-bs-toggle="tab" data-bs-target="#nav-pendampingpkh" type="button" role="tab" aria-controls="nav-pendampingpkh" aria-selected="true">pendamping pkh</button>
            <button class="nav-link text-uppercase" id="nav-prodi-tab" data-bs-toggle="tab" data-bs-target="#nav-prodi" type="button" role="tab" aria-controls="nav-prodi" aria-selected="true">program studi</button>
            <button class="nav-link text-uppercase" id="nav-sma-tab" data-bs-toggle="tab" data-bs-target="#nav-sma" type="button" role="tab" aria-controls="nav-sma" aria-selected="true">sma</button>
            <button class="nav-link text-uppercase" id="nav-universitas-tab" data-bs-toggle="tab" data-bs-target="#nav-universitas" type="button" role="tab" aria-controls="nav-universitas" aria-selected="true">universitas</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <!-- DESA     -->
        <div class="tab-pane fade show active" id="nav-desa" role="tabpanel" aria-labelledby="nav-desa-tab" tabindex="0">
            <div class="card rounded-0 rounded-bottom">
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <div class="d-grid gap-2 mt-0 mb-3 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalAddDesa">
                                    <i class="material-icons mr-0">add</i>
                                    Tambah Data
                                </button>
                            </div>

                            <table id="tabel-desa" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 10px;" class="text-center text-xxs font-weight-bolder">
                                            <p><b>NO</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA DESA / KELURAHAN</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA KECAMATAN</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA KABUPATEN / KOTA</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftardesa as $row): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $no++; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_desa']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_kecamatan']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_kabupaten']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn-edit-desa"
                                                    data-id_kabupaten="<?= $row['id_kabupaten']; ?>"
                                                    data-id_kecamatan="<?= $row['id_kecamatan']; ?>"
                                                    data-id="<?= $row['id_desa']; ?>"
                                                    data-nama="<?= $row['nama_desa']; ?>"><span class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                </a>
                                                <a href="/masterdata/desa/Delete/<?= $row['id_desa']; ?>">
                                                    <span class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JALUR  -->
        <div class="tab-pane fade" id="nav-jalurmasuk" role="tabpanel" aria-labelledby="nav-jalurmasuk-tab" tabindex="0">
            <div class="card rounded-0 rounded-bottom">
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <div class="d-grid gap-2 mt-0 mb-3 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalAddJalur">
                                    <i class="material-icons mr-0">add</i>
                                    Tambah Data
                                </button>
                            </div>
                            <table id="tabel-jalurmasuk" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 40px !important;" class="text-center text-xxs font-weight-bolder">
                                            <p><b>NO</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA JALUR MASUK</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftarjalur as $row): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $no++; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1"><?= $row['nama_jalurmasuk']; ?></h6>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn-edit-jalurmasuk"
                                                    data-id="<?= $row['id_jalurmasuk']; ?>"
                                                    data-nama="<?= $row['nama_jalurmasuk']; ?>">
                                                    <span class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                </a>
                                                <a href="/masterdata/jalurMasuk/Delete/<?= $row['id_jalurmasuk']; ?>">
                                                    <span class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- KABUPATEN -->
        <div class="tab-pane fade" id="nav-kabupaten" role="tabpanel" aria-labelledby="nav-kabupaten-tab" tabindex="0">
            <div class="card rounded-0 rounded-bottom">
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <div class="d-grid gap-2 mt-0 mb-3 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalAddKabupaten">
                                    <i class="material-icons mr-0">add</i> Tambah Kabupaten
                                </button>
                            </div>
                            <table id="tabel-kabupaten" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 50px;" class="text-center text-xxs font-weight-bolder">
                                            <p><b>NO</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA KABUPATEN</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftarkabupaten as $row): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $no++; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_kabupaten']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn-edit-kabupaten"
                                                    data-id="<?= $row['id_kabupaten']; ?>"
                                                    data-nama="<?= $row['nama_kabupaten']; ?>">
                                                    <span class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                </a>
                                                <a href="/masterdata/kabupaten/Delete/<?= $row['id_kabupaten']; ?>">
                                                    <span class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- KECAMATAN -->
        <div class="tab-pane fade" id="nav-kecamatan" role="tabpanel" aria-labelledby="nav-kecamatan-tab" tabindex="0">
            <div class="card rounded-0 rounded-bottom">
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <div class="d-grid gap-2 mt-0 mb-3 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalAddKecamatan">
                                    <i class="material-icons mr-0">add</i> Tambah Kecamatan
                                </button>
                            </div>
                            <table id="tabel-kecamatan" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 50px;" class="text-center text-xxs font-weight-bolder">
                                            <p><b>NO</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA KECAMATAN</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA KABUPATEN</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftarkecamatan as $row): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $no++; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_kecamatan']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_kabupaten']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn-edit-kecamatan"
                                                    data-id="<?= $row['id_kecamatan']; ?>"
                                                    data-nama="<?= $row['nama_kecamatan']; ?>"
                                                    data-id_kabupaten="<?= $row['id_kabupaten']; ?>">
                                                    <span class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                </a>
                                                <a href="/masterdata/kecamatan/Delete/<?= $row['id_kecamatan']; ?>">
                                                    <span class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PENDAMPING PKH -->
        <div class="tab-pane fade" id="nav-pendampingpkh" role="tabpanel" aria-labelledby="nav-pendampingpkh-tab" tabindex="0">
            <div class="card rounded-0 rounded-bottom">
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <div class="d-grid gap-2 mt-0 mb-3 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalAddPendampingPKH">
                                    <i class="material-icons mr-0">add</i> Tambah Pendamping PKH
                                </button>
                            </div>
                            <table id="tabel-pendampingpkh" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 50px;" class="text-center text-xxs font-weight-bolder">
                                            <p><b>NO</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA PENDAMPING PKH</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>KONTAK TELEPON</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>ALAMAT</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>KABUPATEN DOMISILI</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftarpkh as $row): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $no++; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1"><?= $row['nama_pendamping_pkh']; ?></h6>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['no_tel']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['alamat']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_kabupaten']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn-edit-pendampingpkh"
                                                    data-id="<?= $row['id_pendampingpkh']; ?>"
                                                    data-nama="<?= $row['nama_pendamping_pkh']; ?>"
                                                    data-no_tel="<?= $row['no_tel']; ?>"
                                                    data-alamat="<?= $row['alamat']; ?>"
                                                    data-id_kabupaten="<?= $row['id_kabupaten']; ?>">
                                                    <span class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                </a>
                                                <a href="/masterdata/pendampingpkh/Delete/<?= $row['id_pendampingpkh']; ?>">
                                                    <span class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODI -->
        <div class="tab-pane fade" id="nav-prodi" role="tabpanel" aria-labelledby="nav-prodi-tab" tabindex="0">
            <div class="card rounded-0 rounded-bottom">
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <div class="d-grid gap-2 mt-0 mb-3 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalAddProdi">
                                    <i class="material-icons mr-0">add</i> Tambah Prodi
                                </button>
                            </div>
                            <table id="tabel-prodi" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 50px;" class="text-center text-xxs font-weight-bolder">
                                            <p><b>NO</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA PROGRAM STUDI</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftarprodi as $row): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $no++; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_daftarprodi']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn-edit-daftarprodi"
                                                    data-id="<?= $row['id_daftarprodi']; ?>"
                                                    data-nama="<?= $row['nama_daftarprodi']; ?>">
                                                    <span class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                </a>
                                                <a href="/masterdata/prodi/Delete/<?= $row['id_daftarprodi']; ?>">
                                                    <span class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SMA -->
        <div class="tab-pane fade" id="nav-sma" role="tabpanel" aria-labelledby="nav-sma-tab" tabindex="0">
            <div class="card rounded-0 rounded-bottom">
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <div class="d-grid gap-2 mt-0 mb-3 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalAddSMA">
                                    <i class="material-icons mr-0">add</i> Tambah SMA
                                </button>
                            </div>
                            <table id="tabel-sma" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 50px;" class="text-center text-xxs font-weight-bolder">
                                            <p><b>NO</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA SMA</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>KOTA / KABUPATEN</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftarsma as $row): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $no++; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_SMA']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_kabupaten']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn-edit-SMA"
                                                    data-id="<?= $row['id_SMA']; ?>"
                                                    data-nama="<?= $row['nama_SMA']; ?>"
                                                    data-id_kabupaten="<?= $row['id_kabupaten']; ?>">
                                                    <span class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                </a>

                                                <a href="/masterdata/SMA/Delete/<?= $row['id_SMA']; ?>">
                                                    <span class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- UNIVERSITAS -->
        <div class="tab-pane fade" id="nav-universitas" role="tabpanel" aria-labelledby="nav-universitas-tab" tabindex="0">
            <div class="card rounded-0 rounded-bottom">
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <div class="d-grid gap-2 mt-0 mb-3 d-md-flex justify-content-md-start">
                                <button class="btn btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#modalAddUniversitas">
                                    <i class="material-icons mr-0">add</i> Tambah Universitas
                                </button>
                            </div>
                            <table id="tabel-universitas" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 50px;" class="text-center text-xxs font-weight-bolder">
                                            <p><b>NO</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA PERGURUAN TINGGI</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($daftaruniversitas as $row): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $no++; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?= $row['nama_daftaruniversitas']; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="#"
                                                    class="btn-edit-daftaruniversitas"
                                                    data-id="<?= $row['id_daftaruniversitas']; ?>"
                                                    data-nama="<?= $row['nama_daftaruniversitas']; ?>">
                                                    <span class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                </a>
                                                <a href="/masterdata/daftaruniversitas/Delete/<?= $row['id_daftaruniversitas']; ?>">
                                                    <span class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Desa -->
<div class="modal fade" id="modalAddDesa" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Desa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formAddDesa" action="/masterdata/desa/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kabupaten" class="form-label">Kabupaten / Kota</label>
                        <select id="id_kabupaten" name="id_kabupaten" class="form-control" required>
                            <option value="">-- Pilih Kabupaten --</option>
                            <?php foreach ($daftarkabupaten as $kab): ?>
                                <option value="<?= $kab['id_kabupaten'] ?>">
                                    <?= $kab['nama_kabupaten'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kecamatan" class="form-label">Kecamatan</label>
                        <select id="id_kecamatan" name="id_kecamatan" class="form-control" required>
                            <option value="">-- Pilih Kecamatan --</option>
                        </select>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#id_kabupaten').on('change', function() {
                                var id_kabupaten = $(this).val();

                                if (id_kabupaten) {
                                    $.ajax({
                                        url: '/masterdata/getKecamatan/' + id_kabupaten,
                                        type: 'GET',
                                        dataType: 'json',
                                        success: function(data) {
                                            $('#id_kecamatan').empty();
                                            $('#id_kecamatan').append('<option value="">-- Pilih Kecamatan --</option>');
                                            $.each(data, function(key, value) {
                                                $('#id_kecamatan').append('<option value="' + value.id_kecamatan + '">' + value.nama_kecamatan + '</option>');
                                            });
                                        }
                                    });
                                } else {
                                    $('#id_kecamatan').empty();
                                    $('#id_kecamatan').append('<option value="">-- Pilih Kecamatan --</option>');
                                }
                            });
                        });
                    </script>

                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama Desa</label>
                        <input type="text" name="nama_desa" class="form-control" required>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Jalur Masuk -->
<div class="modal fade" id="modalAddJalur" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Jalur Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formAddJalur" action="/masterdata/jalurMasuk/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama Jalur Masuk</label>
                        <input type="text" name="nama_jalurmasuk" class="form-control" required>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Kabupaten -->
<div class="modal fade" id="modalAddKabupaten" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Kabupaten</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="/masterdata/kabupaten/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama Kabupaten</label>
                        <input type="text" name="nama_kabupaten" class="form-control" required>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Kecamatan -->
<div class="modal fade" id="modalAddKecamatan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Kecamatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="/masterdata/kecamatan/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kabupaten" class="form-label">Kabupaten</label>
                        <select name="id_kabupaten" class="form-control" required>
                            <option value="">-- Pilih Kabupaten --</option>
                            <?php foreach ($daftarkabupaten as $kab): ?>
                                <option value="<?= $kab['id_kabupaten'] ?>"><?= $kab['nama_kabupaten'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" required>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Pendamping PKH -->
<div class="modal fade" id="modalAddPendampingPKH" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Pendamping PKH</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="/masterdata/pendampingpkh/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama Pendamping PKH</label>
                        <input type="text" name="nama_pendamping_pkh" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Kontak Telepon</label>
                        <input type="text" name="no_tel" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kabupaten" class="form-label">Kabupaten</label>
                        <select name="id_kabupaten" class="form-control" required>
                            <option value="">-- Pilih Kabupaten --</option>
                            <?php foreach ($daftarkabupaten as $kab): ?>
                                <option value="<?= $kab['id_kabupaten'] ?>"><?= $kab['nama_kabupaten'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Prodi -->
<div class="modal fade" id="modalAddProdi" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Prodi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="/masterdata/prodi/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama Prodi</label>
                        <input type="text" name="nama_daftarprodi" class="form-control" required>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah SMA -->
<div class="modal fade" id="modalAddSMA" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah SMA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="/masterdata/SMA/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama SMA</label>
                        <input type="text" name="nama_SMA" class="form-control" required>
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kabupaten" class="form-label">Kabupaten</label>
                        <select name="id_kabupaten" class="form-control" required>
                            <option value="">-- Pilih Kabupaten --</option>
                            <?php foreach ($daftarkabupaten as $kab): ?>
                                <option value="<?= $kab['id_kabupaten'] ?>"><?= $kab['nama_kabupaten'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Universitas -->
<div class="modal fade" id="modalAddUniversitas" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Universitas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="/masterdata/daftaruniversitas/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama Universitas</label>
                        <input type="text" name="nama_daftaruniversitas" class="form-control" required>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Desa -->
<div class="modal fade" id="modalEditDesa" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Desa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditDesa" action="" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_desa" id="edit-id-desa">
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kabupaten" class="form-label">Kabupaten / Kota</label>
                        <select disabled name="id_kabupaten" id="edit-id_kabupaten" class="form-control" required>
                            <option value="">-- Pilih Kabupaten --</option>
                            <?php foreach ($daftarkabupaten as $kec): ?>
                                <option value="<?= $kec['id_kabupaten'] ?>"
                                    <?= $kec['id_kabupaten'] ? 'selected' : '' ?>>
                                    <?= $kec['nama_kabupaten'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kecamatan" class="form-label">Kecamatan</label>
                        <select disabled name="id_kecamatan" id="edit-id_kecamatan" class="form-control" required>
                            <option value="">-- Pilih Kecamatan --</option>
                            <?php foreach ($daftarkecamatan as $kec): ?>
                                <option value="<?= $kec['id_kecamatan'] ?>"
                                    <?= $kec['id_kecamatan'] ? 'selected' : '' ?>>
                                    <?= $kec['nama_kecamatan'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="input-group input-group-outline my-3   is-filled">
                        <label class="form-label">Nama Desa</label>
                        <input type="text" name="nama_desa" id="edit-nama-desa" class="form-control">
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.btn-edit-desa', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let nama = $(this).data('nama');

        $('#edit-id-desa').val(id);
        $('#edit-nama-desa ').val(nama);
        $('#formEditDesa').attr('action', '/masterdata/desa/update/' + id);
        $('#modalEditDesa').modal('show');
    });
</script>

<!-- Modal Edit Jalur Masuk -->
<div class="modal fade" id="modalEditJalur" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Jalur Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditJalur" action="" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_jalurmasuk" id="edit-id-jalurmasuk">
                    <div class="input-group input-group-outline my-3   is-filled">
                        <label class="form-label">Nama Jalur Masuk</label>
                        <input type="text" name="nama_jalurmasuk" id="edit-nama-jalurmasuk" class="form-control">
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.btn-edit-jalurmasuk', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let nama = $(this).data('nama');

        $('#edit-id-jalurmasuk').val(id);
        $('#edit-nama-jalurmasuk').val(nama);
        $('#formEditJalur').attr('action', '/masterdata/jalurMasuk/update/' + id);

        $('#modalEditJalur').modal('show');
    });
</script>

<!-- Modal Edit Kabupaten -->
<div class="modal fade" id="modalEditKabupaten" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Kabupaten</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditKabupaten" action="" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_kabupaten" id="edit-id-kabupaten">
                    <div class="input-group input-group-outline my-3   is-filled">
                        <label class="form-label">Nama Kabupaten</label>
                        <input type="text" name="nama_kabupaten" id="edit-nama-kabupaten" class="form-control">
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.btn-edit-kabupaten', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let nama = $(this).data('nama');

        $('#edit-id-kabupaten').val(id);
        $('#edit-nama-kabupaten ').val(nama);
        $('#formEditKabupaten').attr('action', '/masterdata/kabupaten/update/' + id);

        $('#modalEditKabupaten').modal('show');
    });
</script>

<!-- Modal Edit Kecamatan -->
<div class="modal fade" id="modalEditKecamatan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Kecamatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditKecamatan" action="" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_kecamatan" id="edit-id-kecamatan">
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kabupaten" class="form-label">Kabupaten / Kota</label>
                        <select disabled name="id_kabupaten" id="edit-id_kabupaten" class="form-control" required>
                            <option value="">-- Pilih Kabupaten --</option>
                            <?php foreach ($daftarkabupaten as $kab): ?>
                                <option value="<?= $kab['id_kabupaten'] ?>"
                                    <?= $kab['id_kabupaten'] ? 'selected' : '' ?>>
                                    <?= $kab['nama_kabupaten'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group input-group-outline my-3   is-filled">
                        <label class="form-label">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" id="edit-nama-kecamatan" class="form-control">
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.btn-edit-kecamatan', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let nama = $(this).data('nama');

        $('#edit-id-kecamatan').val(id);
        $('#edit-nama-kecamatan ').val(nama);
        $('#formEditKecamatan').attr('action', '/masterdata/kecamatan/update/' + id);
        $('#modalEditKecamatan').modal('show');
    });
</script>

<!-- Modal Edit Pendampingpkh -->
<div class="modal fade" id="modalEditPendampingPKH" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Daftar Pendamping PKH</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditPendampingPKH" action="" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_pendampingpkh" id="edit-id-pendampingpkh">
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama Pendamping PKH</label>
                        <input type="text" name="nama_pendamping_pkh" id="edit-nama-pendampingpkh" class="form-control">
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Kontak Telepon</label>
                        <input type="text" name="no_tel" id="edit-no_tel" class="form-control">
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="edit-alamat" class="form-control">
                    </div>
                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kabupaten" class="form-label">Kabupaten / Kota</label>
                        <select name="id_kabupaten" id="edit-id_kabupaten" class="form-control" required>
                            <option value="">-- Pilih Kabupaten --</option>
                            <?php foreach ($daftarkabupaten as $kab): ?>
                                <option value="<?= $kab['id_kabupaten'] ?>"
                                    <?= $kab['id_kabupaten'] ? 'selected' : '' ?>>
                                    <?= $kab['nama_kabupaten'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.btn-edit-pendampingpkh', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let nama = $(this).data('nama');
        let no_tel = $(this).data('no_tel');
        let alamat = $(this).data('alamat');
        let id_kabupaten = $(this).data('id_kabupaten');

        $('#edit-id-pendampingpkh').val(id);
        $('#edit-nama-pendampingpkh').val(nama);
        $('#edit-no_tel').val(no_tel);
        $('#edit-alamat').val(alamat);
        $('#edit-id_kabupaten').val(id_kabupaten);
        $('#formEditPendampingPKH').attr('action', '/masterdata/pendampingpkh/update/' + id);
        $('#modalEditPendampingPKH').modal('show');
    });
</script>

<!-- Modal Edit Daftarprodi -->
<div class="modal fade" id="modalEditDaftarProdi" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Daftar Prodi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditDaftarProdi" action="" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_daftarprodi" id="edit-id-daftarprodi">
                    <div class="input-group input-group-outline my-3   is-filled">
                        <label class="form-label">Nama Prodi</label>
                        <input type="text" name="nama_daftarprodi" id="edit-nama-daftarprodi" class="form-control">
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.btn-edit-daftarprodi', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let nama = $(this).data('nama');

        $('#edit-id-daftarprodi').val(id);
        $('#edit-nama-daftarprodi ').val(nama);
        $('#formEditDaftarProdi').attr('action', '/masterdata/prodi/update/' + id);

        $('#modalEditDaftarProdi').modal('show');
    });
</script>

<!-- Modal Edit SMA -->
<div class="modal fade" id="modalEditSMA" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Daftar SMA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditSMA" action="" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_SMA" id="edit-id-SMA">

                    <div class="input-group input-group-outline my-3 is-filled">
                        <label class="form-label">Nama SMA</label>
                        <input type="text" name="nama_SMA" id="edit-nama-SMA" class="form-control">
                    </div>

                    <div class="input-group input-group-outline my-3 is-filled">
                        <label for="id_kabupaten" class="form-label">Kabupaten / Kota</label>
                        <select name="id_kabupaten" id="edit-id_kabupaten" class="form-control" required>
                            <option value="">-- Pilih Kabupaten --</option>
                            <?php foreach ($daftarkabupaten as $kab): ?>
                                <option value="<?= $kab['id_kabupaten'] ?>"
                                    <?= $kab['id_kabupaten'] ? 'selected' : '' ?>>
                                    <?= $kab['nama_kabupaten'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.btn-edit-SMA', function(e) {
        e.preventDefault();

        let id = $(this).data('id');
        let nama = $(this).data('nama');
        let id_kabupaten = $(this).data('id_kabupaten');

        // isi field form
        $('#edit-id-SMA').val(id);
        $('#edit-nama-SMA').val(nama);
        $("#edit-id_kabupaten").val(id_kabupaten);
        $('#formEditSMA').attr('action', '/masterdata/SMA/update/' + id);
        $('#modalEditSMA').modal('show');

    });
</script>

<!-- Modal Edit Daftar Universitas -->
<div class="modal fade" id="modalEditdaftaruniversitas" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Daftar Universitas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formEditdaftaruniversitas" action="" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id_daftaruniversitas" id="edit-id-daftaruniversitas">
                    <div class="input-group input-group-outline my-3   is-filled">
                        <label class="form-label">Nama Universitas</label>
                        <input type="text" name="nama_daftaruniversitas" id="edit-nama-daftaruniversitas" class="form-control">
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.btn-edit-daftaruniversitas', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let nama = $(this).data('nama');

        $('#edit-id-daftaruniversitas').val(id);
        $('#edit-nama-daftaruniversitas ').val(nama);
        $('#formEditdaftaruniversitas').attr('action', '/masterdata/daftaruniversitas/update/' + id);

        $('#modalEditdaftaruniversitas').modal('show');
    });
</script>
<?= $this->endSection() ?>