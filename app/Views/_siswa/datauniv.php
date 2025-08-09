<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<style>
    .ahay {
        font-weight: bold;
        font-size: large;
        color: #f01c64;
        text-transform: uppercase;
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

                    <div class="container-fluid">
                        <?php if (!empty($notif)) : ?>
                            <div class="alert alert-warning my-4">
                                <?= $notif ?>
                            </div>
                        <?php endif; ?>

                        <!-- Page Heading -->
                        <h1 class="mt-3">DATA UNIVERSITAS</h1>
                        <p style="border-bottom: 2px solid gray;">Jika anda <b>sudah lulus tes masuk kuliah, mohon isi </b>form berikut sesuai dengan data universitas anda!. <b>Jika belum mohon abaikan</b>! Terima Kasih!</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/DataUniversitas/Edit" class="btn btn-primary me-md-2">Edit</a>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Perguruan Tinggi</label>
                                        <input type="text" name="id_daftaruniversitas" class="form-control ahay" value="<?= $universitasList['nama_daftaruniversitas'] ?? '' ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Program Studi</label>
                                        <input type="text" name="id_daftarprodi" class="form-control ahay" value="<?= $universitasList['nama_daftarprodi']  ?? '' ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Jalur Masuk</label>
                                        <input type="text" name="id_jalurmasuk" class="form-control ahay" value="<?= $universitasList['nama_jalurmasuk'] ?? '' ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Tahun Masuk</label>
                                        <input type="text" name="tahun_masuk" class="form-control ahay" value="<?= $universitasList['tahun_masuk']  ?? '' ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Status KIP SMA</label>
                                        <input type="text" name="kip_sma" class="form-control ahay"
                                            value="<?= ($universitasList['kip_sma'] ?? null) == 1 ? 'Ya' : 'Tidak' ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-static mb-4">
                                        <label>Status KIP Kuliah</label>
                                        <input type="text" name="kip_kuliah" class="form-control ahay"
                                            value="<?= ($universitasList['kip_kuliah'] ?? null) == 1 ? 'Ya' : 'Tidak' ?>" readonly>
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