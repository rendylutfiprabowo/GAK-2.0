<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div class="container-fluid py-4">
    <div class="ms-auto my-auto mt-lg-0 mt-4 mb-4">
        <div class="ms-auto my-auto">
            <button style="margin-right: 8px;" type="button" class="btn btn-outline-primary  mb-0" data-bs-toggle="modal" data-bs-target="#import"><i class="material-icons">file_upload</i>
                Import
            </button>
            <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog mt-lg-10">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Import XLSX</h5>
                            <i class="material-icons ms-3">file_upload</i>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Mohon upload dengan sesuai dengan template / format (format file xlsx)</p>
                            <a href="/PKHLolosPTN/export"><button class="btn bg-gradient-warning">Download Template</button></a>
                            <div class="input-group input-group-dynamic mb-3">
                                <form method="post" action="/PKHLolosPTN/import" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="file">Pilih File Disini</label><br>
                                        <input type="file" name="fileexcel" class="btn bg-gradient-secondary " id="file" required accept=".xls, .Xlsx" required />
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary " data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary ">Upload</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <a style="margin-right: 8px;" href="<?= site_url('/PKHLolosPTN/export') ?>" class="btn btn-outline-primary  export mb-0 mt-sm-0 mt-1" data-type=".xlsx" type="button" name="button"><i class="material-icons">file_download</i> Export</a>
            <a href="/PKHLolosPTN/clearall" class="btn btn-outline-primary  export mb-0 mt-sm-0 mt-1" data-type=".xlsx" type="button" name="button"><i class="material-icons">delete_sweep</i> Clear Data</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">DATA SISWA KPM PKH</h6>
                    </div>
                </div>
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <div class="table-responsive p-0">
                            <table id="example1" class="table table-hover align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center text-xxs font-weight-bolder">
                                            <p><b>USERNAME</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NAMA</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NO. PKH</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>KIP SMA</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>KIP KULIAH</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>NOMOR WA</b></p>
                                        </th>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>AKSI</b></p>
                                        </th>
                                    </tr>
                                </thead>
                        </div>
                        <tbody>
                            <?php foreach ($PTN as $dp): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="/img/user.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= esc($dp['username']) ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?= esc($dp['nama']) ?? 'BIODATA BELUM LENGKAP' ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm"><?= esc($dp['no_pkh']) ?? 'BIODATA BELUM LENGKAP' ?></h6>
                                    </td>
                                    <td class="align-middle text-center">
                                        <h6 class="mb-0 text-sm">
                                            <?= (!empty($dp['kip_sma']) && $dp['kip_sma'] != '0') ? 'YA' : 'TIDAK' ?>
                                        </h6>
                                    </td>
                                    <td class="align-middle text-center">
                                        <h6 class="mb-0 text-sm">
                                            <?= (!empty($dp['kip_kuliah']) && $dp['kip_kuliah'] != '0') ? 'YA' : 'TIDAK' ?>
                                        </h6>
                                    </td>
                                    <td class="align-middle text-center">
                                        <h6 class="mb-0 text-sm"><?= esc($dp['no_whatshap']) ?></h6>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="/PKHLolosPTN/detail/<?= $dp['id_siswa'] ?>">
                                            <span class="badge badge-sm bg-gradient-info"><i class="material-icons">info</i></span>
                                        </a>
                                        <a href="/PKHLolosPTN/delete/<?= $dp['id_siswa'] ?>">
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
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable({});
        });
    </script>
    <?= $this->endSection() ?>