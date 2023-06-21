<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body p-3">

                    <div class="container-fluid">

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

                        <h1 class="mt-3">UPLOAD</h1>
                        <p style="border-bottom: 2px solid gray;">Jika anda <b>sudah lulus tes masuk kuliah, mohon isi </b>form berikut sesuai dengan data universitas anda!. <b>Jika belum mohon abaikan</b>! Terima Kasih!</p>

                        <div class="container-fluid">

                            <div class="input-group input-group-dynamic mb-3">
                                <form method="post" action="/StoreDokumen" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <h6>SKTM</h6>
                                        <input type="file" name="sktm" class="btn bg-gradient-secondary " id="file" required accept=".jpg, .png" required />
                                    </div>
                                    <div class="form-group">
                                        <h6>KTP Orang Tua</h6>
                                        <input type="file" name="ktp_ortu" class="btn bg-gradient-secondary " id="file" required accept=".jpg, .png" required />
                                    </div>
                                    <div class="form-group">
                                        <h6>SK Pendapatan Orang Tua</h6>
                                        <input type="file" name="sk_pendapatan" class="btn bg-gradient-secondary " id="file" required accept=".jpg, .png" required />
                                    </div>
                                    <div class="form-group">
                                        <h6>Dokumen Pendukung Lainnya</h6>
                                        <input type="file" name="dokumen" class="btn bg-gradient-secondary " id="file" required accept=".jpg, .png" required />
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary " data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary ">Sumbit All</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>