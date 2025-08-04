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

                    <button type="submit" class="btn btn-primary mt-5" value="submit">Simpan Data</button>
                    <a href="/PKHLolosPTN/detail/<?= $PTN['id_siswa'] ?>"><button type="button" class="btn bg-gradient-secondary mt-5 ms-2">Batal</button></a>

                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="email_address">Email</label>
                                <input placeholder="Email" name="email_address" id="email_address" type="email_address" class="form-control" value="<?= $PTN['email_address'] ?>">
                            </div>
                        </div>
                        <div class=" col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="nama">Nama Lengkap</label>
                                <input placeholder="Nama Siswa" name="nama" id="nama" type="text" class="form-control" readonly value="<?= $PTN['nama'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="no_whatshap">Nomor WhatsApp</label>
                            <input placeholder="Nomor Telepon Seluler" name="no_whatshap" id="no_whatshap" type="tel" class="form-control" value="<?= $PTN['no_whatshap'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="provinsi">Provinsi</label>
                            <input placeholder="Provinsi" name="provinsi" id="provinsi" type="text" class="form-control" value="<?= $PTN['provinsi'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="kabupaten_kota">Kabupaten / Kota</label>
                            <input placeholder="Kabupaten / Kota" name="kabupaten_kota" id="kabupaten_kota" type="text" class="form-control" id="kabupaten_kota" value="<?= $PTN['kabupaten_kota'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="kecamatan">Kecamatan</label>
                            <input placeholder="Kecamatan" type="text" id="kecamatan" name="kecamatan" class="form-control" readonly value="<?= $PTN['kecamatan'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="desa">Desa / Kelurahan</label>
                            <input placeholder="Desa / Kelurahan" type="text" id="desa" name="desa" class="form-control" readonly value="<?= $PTN['desa'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input placeholder="Asal Sekolah" type="text" id="asal_sekolah" name="asal_sekolah" class="form-control" readonly value="<?= $PTN['asal_sekolah'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="no_pkh">Nomor PKH</label>
                            <input placeholder="Nomor PKH" type="text" name="no_pkh" class="form-control" id="no_pkh" readonly value="<?= $PTN['no_pkh'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="jalur_masukptn">Jalur Masuk PTN</label>
                            <input placeholder="Jalur Masuk PTN" type="text" name="jalur_masukptn" class="form-control" id="jalur_masukptn" value="<?= $PTN['jalur_masukptn'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="universitas">Universitas</label>
                            <input placeholder="Universitas" type="text" name="universitas" class="form-control" id="universitas" value="<?= $PTN['universitas'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">
                            <label for="program_studi">Program Studi</label>
                            <input placeholder="Program Studi" type="text" name="program_studi" class="form-control" id="program_studi" value="<?= $PTN['program_studi'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 col-md-6 my2">
                        <div class="form-group my-2">

                            <div class="form-group my-2">
                                <label for="status_kip">Status KIP K</label>
                                <select name="status_kip" class="form-select" aria-label="Default select example">
                                    <option value="YA" <?= ($PTN['status_kip'] === 'YA') ? 'selected' : '' ?>>YA</option>
                                    <option value="TIDAK" <?= ($PTN['status_kip'] === 'TIDAK') ? 'selected' : '' ?>>TIDAK</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<?= $this->endSection() ?>