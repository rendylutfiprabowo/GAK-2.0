<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

<!-- bs 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">



<form action="/caring/update/" method="POST" enctype="multipart/form-data">
    <div class="container-fluid py-4">
        <div class="card my-4 mx-3">
            <div class="card-header py-0">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">
                        edit
                    </i>
                </div>
            </div>
            <div class="card-body px-0 mx-4 ">
                <div class="m-0 p-0">
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" id="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="namasiswa" class="form-label">Nama Siswa</label>
                                    <input name="namasiswa" id="namasiswa" type="text" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="nomortelepon" class="form-label">Nomor Telepon Seluler</label>
                                <input name="nomortelepon" id="nomortelepon" type="tel" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="asalsekolah" class="form-label">Asal Sekolah</label>
                                <input name="asalsekolah" id="asalsekolah" type="text" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <input name="provinsi" id="provinsi" type="text" class="form-control" id="provinsi" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="kabupaten/kota" class="form-label">Kabupaten / Kota</label>
                                <input type="text" id="kabupaten/kota" name="kabupaten/kota" class="form-control" readonly value="">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" id="kecamatan" name="kecamatan" class="form-control" readonly value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="desa/kelurahan" class="form-label">Desa / Kelurahan</label>
                                <input type="text" id="desa/kelurahan" name="desa/kelurahan" class="form-control" readonly value="">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="nomorpkh" class="form-label">Nomor PKH</label>
                                <input type="text" name="nomorpkh" class="form-control" id="nomorpkh" readonly value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="jalurmasuk" class="form-label">Jalur Masuk PTN</label>
                                <input type="text" name="jalurmasuk" class="form-control" id="jalurmasuk" value="" ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="universitas" class="form-label">Universitas</label>
                                <input type="text" name="universitas" class="form-control" id="universitas" value="" ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="input-group input-group-outline my-3">
                                <label for="prodi" class="form-label">Program Studi</label>
                                <input type="text" name="prodi" class="form-control" id="prodi" value="" ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">

                            <div class="form-group my-2">
                                <label for="hub_ybs">Status KIP K</label>
                                <select name="hub_ybs" class="form-select" aria-label="Default select example">
                                    <option value="xxxxxxx" selected>xxxxxxx</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2" value="submit">Simpan Data</button>
                    <a href="/datapelanggan/caring/detail/xx"><button type="button" class="btn bg-gradient-secondary mt-2 ms-2">Batal</button></a>
                </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection() ?>