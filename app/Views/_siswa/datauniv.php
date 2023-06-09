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
                        <h1 class="mt-3">DATA UNIVERSITAS</h1>
                        <p style="border-bottom: 2px solid gray;">Jika anda <b>sudah lulus tes masuk kuliah, mohon isi </b>form berikut sesuai dengan data universitas anda!. <b>Jika belum mohon abaikan</b>! Terima Kasih!</p>
                        <form action="">
                            <div class="form-group my-2">
                                <div class="input-group input-group-static mb-4">
                                    <label>Nama Perguruan Tinggi</label>
                                    <input type="email" class="form-control ahay " required value="Harvard University">
                                    <p class="ihiy"><b>contoh : </b>UNIVERSITAS LAMPUNG, UNIVERSITAS GAJAH MADA</p>
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <div class="input-group input-group-static mb-4">
                                    <label>Program Studi</label>
                                    <input type="email" class="form-control ahay " required value="S1 ILMU KOMPUTER">
                                    <p class="ihiy"><b>contoh : </b>S1 ILMU KOMPUTER, D3 MANAJEMEN INFORMATIKA</p>
                                </div>
                            </div>
                           
                            <div class="input-group input-group-static mb-4">
                                <label for="exampleFormControlSelect1" class="ms-0">Tahun Masuk</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>4
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