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
                        <h1 class="mt-3">BIODATA DIRI</h1>
                        <p style="border-bottom: 2px solid gray;">Mohon isi biodata berikut sesuai dengan data diri anda! Terima Kasih!</p>
                        <form action="/StoreBiodata" method="post">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Email address</label>
                                            <input type="email" name="email_address" class="form-control ahay ahay">
                                            <p class="ihiy"><b>Petunjuk : </b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control ahay" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nomor Kartu PKH</label>
                                            <input type="text" name="no_pkh" class="form-control ahay">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nama Pendamping PKH</label>
                                            <input type="text" name="nama_pendamping" class="form-control ahay">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label for="exampleFormControlSelect1" class="ms-0">Asal Wilayah</label>
                                            <input type="text" name="asal_wilayah" class="form-control ahay">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Asal Sekolah</label>
                                            <input type="text" name="asal_sekolah" class="form-control ahay">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nama Ibu</label>
                                            <input type="text" name="nama_ibu" class="form-control ahay">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 my2">
                                    <div class="form-group my-2">
                                        <div class="input-group input-group-static mb-4">
                                            <label>No WhatsApp Siswa</label>
                                            <input type="text" name="no_whatshap" class="form-control ahay">
                                        </div>
                                    </div>
                                </div>
                            </div>







                            <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                                <a href="" class="btn btn-warning">Edit</a>
                            </div> -->



                        </form>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>