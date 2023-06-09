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

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body p-3">

                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="mt-3" >BIODATA DIRI</h1>
                        <p style="border-bottom: 2px solid gray;">Mohon <b>$username siswa</b> isi biodata berikut sesuai dengan data diri anda! Terima Kasih!</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Email address</label>
                                            <input type="email" class="form-control ahay ahay" required value="asda@gmail">
                                            <p class="ihiy"><b>Petunjuk : </b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control ahay" required value="Rendy Lutfi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nomor Kartu PKH</label>
                                            <input type="text" class="form-control ahay" required value="08096785875">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nama Pendamping PKH</label>
                                            <input type="text" class="form-control ahay" required value="Yanto Yanti">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label for="exampleFormControlSelect1" class="ms-0">Asal Wilayah</label>
                                            <select class="form-control ahay" required value="tester value" id="exampleFormControlSelect1">
                                                <option>Bandarlampung</option>
                                                <option>Pdasdasd</option>
                                                <option>sad</option>
                                                <option>asd</option>
                                                <option>asdasd</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Asal Sekolah</label>
                                            <input type="text" class="form-control ahay" required value="SMA 1 BANDARLAMPUNG">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nama Ibu</label>
                                            <input type="text" class="form-control ahay" required value="tester value">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>No WhatsApp Siswa</label>
                                            <input type="text" class="form-control ahay" required value="tester value">
                                        </div>
                                    </div>
                                </div>
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