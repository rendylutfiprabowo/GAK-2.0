<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body p-3">

                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="mt-3">DATA UNIVERSITAS</h1>
                        <p style="border-bottom: 2px solid gray;">Jika anda <b>sudah lulus tes masuk kuliah, mohon isi </b>form berikut sesuai dengan data universitas anda!. <b>Jika belum mohon abaikan</b>! Terima Kasih!</p>
                        <form action="">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama Perguruan Tinggi</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Program Studi</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Tahun Masuk</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="button">Simpan dan Lanjutkan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>