<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body p-3">

                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="mt-3">BIODATA DIRI</h1>
                        <p style="border-bottom: 2px solid gray;">Mohon isi biodata berikut sesuai dengan data diri anda! Terima Kasih!</p>
                        <form action="">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">No PKH</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Asal Wilayah</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Asal Sekolah</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama Pendamping PKH</label>
                                <input type="text" class="form-control">
                            </div>
                            
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">No WhatsApp</label>
                                <input type="text" class="form-control">
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
<!-- /.container-fluid -->
<?= $this->endSection(); ?>