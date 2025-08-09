<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<style>
    .ahay {
        font-weight: bold;
        font-size: large;
        color: #f01c64;
    }

    .ihiy {
        margin-top: 5px;
        font-size: small;
    }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body p-3">
                    <div class="container-fluid">

                        <?php if (!empty($notif)) : ?>
                            <div class="alert alert-warning my-4">
                                <?= $notif ?>
                            </div>
                        <?php endif; ?>
                        <script>
                            $(function() {

                                <?php if (session()->has("success")) { ?>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Great!',
                                        text: '<?= session("success") ?>'
                                    })
                                <?php } ?>
                            });
                        </script>



                        <!-- Page Heading -->
                        <h1 class="mt-3">BIODATA DIRI</h1>
                        <p style="border-bottom: 2px solid gray;"></p>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/Biodata/Edit" class="btn btn-primary me-md-2">Edit</a>

                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Email</label>
                                        <input type="email" name="email_address" class="form-control ahay " readonly value="<?= $biodata['email_address'] ?? '' ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control ahay" readonly value="<?= $biodata['nama'] ?? '' ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Nomor Kartu PKH</label>
                                        <input type="text" name="no_pkh" class="form-control ahay" readonly value="<?= $biodata['no_pkh'] ?? '' ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Nama Pendamping PKH</label>
                                        <input type="text" name="nama_pendamping" class="form-control ahay" value="<?= $biodata['nama_pendamping'] ?? '' ?>" readonly required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">Kabupaten / Kota</label>
                                        <input type="text" name="asal_wilayah" class="form-control ahay" value="<?= $biodata['nama_kabupaten'] ?? '' ?>" readonly required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">Kecamatan</label>
                                        <input type="text" name="asal_wilayah" class="form-control ahay" readonly value="<?= $biodata['nama_kecamatan'] ?? '' ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">Desa / Kelurahan</label>
                                        <input type="text" name="asal_wilayah" class="form-control ahay" readonly value="<?= $biodata['nama_desa'] ?? '' ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" class="form-control ahay" readonly value="<?= $biodata['nama_SMA'] ?? '' ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="nama_ibu" class="form-control ahay" readonly value="<?= $biodata['nama_ibu'] ?? '' ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>No WhatsApp Siswa</label>
                                        <input type="text" name="no_whatshap" class="form-control ahay" readonly value="<?= $biodata['no_whatshap'] ?? '' ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        <?php if (!empty($notif)) { ?>
            Swal.fire({
                icon: 'warning',
                title: 'Perhatian!',
                text: '<?= $notif ?>'
            });
        <?php } ?>
    });
</script>

<?= $this->endSection(); ?>