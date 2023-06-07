<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

<!-- bs 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">



<form action="/PKHLolosPTN/update/<?= $PTN['id_siswa'] ?>" method="POST" enctype="multipart/form-data">
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
                                <label for="email_address" class="form-label">Email</label>
                                <input name="email_address" id="email_address" type="email_address" class="form-control" value="<?= $PTN['email_address'] ?>>
                            </div>
                        </div>
                        <div class=" col-lg-6 col-md-6 my2">
                                <div class="form-group my-2">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="nama" class="form-label">Nama Siswa</label>
                                        <input name="nama" id="nama" type="text" class="form-control" disabled="<?= $PTN['no_whatshap'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="no_whatshap" class="form-label">Nomor Telepon Seluler</label>
                                    <input name="no_whatshap" id="no_whatshap" type="tel" class="form-control" value="<?= $PTN['no_whatshap'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input name="provinsi" id="provinsi" type="text" class="form-control" value="<?= $PTN['provinsi'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="kabupaten_kota" class="form-label">Kabupaten / Kota</label>
                                    <input name="kabupaten_kota" id="kabupaten_kota" type="text" class="form-control" id="kabupaten_kota" value="<?= $PTN['kabupaten_kota'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" id="kecamatan" name="kecamatan" class="form-control" readonly value="<?= $PTN['kecamatan'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="desa" class="form-label">Desa / Kelurahan</label>
                                    <input type="text" id="desa" name="desa" class="form-control" readonly value="<?= $PTN['desa'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                    <input type="text" id="asal_sekolah" name="asal_sekolah" class="form-control" readonly value="<?= $PTN['asal_sekolah'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="no_pkh" class="form-label">Nomor PKH</label>
                                    <input type="text" name="no_pkh" class="form-control" id="no_pkh" readonly value="<?= $PTN['no_pkh'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="jalur_masukptn" class="form-label">Jalur Masuk PTN</label>
                                    <input type="text" name="jalur_masukptn" class="form-control" id="jalur_masukptn" value="<?= $PTN['jalur_masukptn'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="universitas" class="form-label">Universitas</label>
                                    <input type="text" name="universitas" class="form-control" id="universitas" value="<?= $PTN['universitas'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 my2">
                                <div class="input-group input-group-outline my-3">
                                    <label for="program_studi" class="form-label">Program Studi</label>
                                    <input type="text" name="program_studi" class="form-control" id="program_studi" value="<?= $PTN['program_studi'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6 my2">

                                <div class="form-group my-2">
                                    <label for="status_kip">Status KIP K</label>
                                    <select name="status_kip" class="form-select" aria-label="Default select example">
                                        <option value="xxxxxxx" selected>"<?= $PTN['status_kip'] ?>"</option>

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