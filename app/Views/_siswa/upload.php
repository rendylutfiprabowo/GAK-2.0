<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body p-3">

                    <div class="container-fluid">
                        <!-- Page Heading -->

                        <h1 class="mt-3">UPLOAD</h1>
                        <p style="border-bottom: 2px solid gray;">Jika anda <b>sudah lulus tes masuk kuliah, mohon isi </b>form berikut sesuai dengan data universitas anda!. <b>Jika belum mohon abaikan</b>! Terima Kasih!</p>

                        <div class="container-fluid">

                            <div class="input-group input-group-dynamic mb-3">
                                <form method="post" action="/datapelanggan/caring/edit/import" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <h6>SKTM</h6>
                                        <input type="file" name="fileexcel" class="btn bg-gradient-secondary " id="file" required accept=".xls, .Xlsx" required />
                                    </div>
                                    <div class="form-group">
                                        <h6>KTP Orang Tua</h6>
                                        <input type="file" name="fileexcel" class="btn bg-gradient-secondary " id="file" required accept=".xls, .Xlsx" required />
                                    </div>
                                    <div class="form-group">
                                        <h6>SK Pendapatan Orang Tua</h6>
                                        <input type="file" name="fileexcel" class="btn bg-gradient-secondary " id="file" required accept=".xls, .Xlsx" required />
                                    </div>
                                    <div class="form-group">
                                        <h6>Dokumen Pendukung Lainnya</h6>
                                        <input type="file" name="fileexcel" class="btn bg-gradient-secondary " id="file" required accept=".xls, .Xlsx" required />
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