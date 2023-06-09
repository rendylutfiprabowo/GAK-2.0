<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

<style>
    p {
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<div class="container-fluid py-4">
    <div class="ms-auto my-auto mt-lg-0 mt-4">
        <div class="ms-auto my-auto">

            <?php if (session()->get('message')) : ?>
                <div class="alert alert-success alert-dismissible text-white fade show" role="alert">
                    <span class="alert-icon align-middle">
                        <span class="material-icons text-md">
                            thumb_up_off_alt
                        </span>
                    </span>
                    <span class="alert-text">Data Berhasil <strong><?= session()->getFlashdata('message'); ?>!</strong></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif;   ?>

            <a href="/PKHLolosPTN" style="margin-right: 8px;" class="btn bg-gradient-warning  mb-0"> <i class="material-icons">arrow_back</i></a>
            <a href="/PKHLolosPTN/edit/<?= $PTN['id_siswa'] ?>" class=" btn bg-gradient-primary mb-0"> <i class="material-icons">edit</i> Edit </a>

        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-4 col-md-6 my2">
            <div class="card my-4">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            person_pin
                        </i>
                    </div>
                </div>
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Email</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['email_address'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Nama Siswa</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['nama'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Nomor Telepon Seluler</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['no_whatshap'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Provinsi</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $PTN['provinsi'] ?></span>

                    </div>
                </div>
                <div class="card-footer p-0">
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my2">
            <div class="card my-4">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            place
                        </i>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Kabupaten / Kota</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['kabupaten_kota'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Kecamatan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['kecamatan'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Desa / Kelurahan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['desa'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Asal Sekolah</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $PTN['asal_sekolah'] ?></span>
                    </div>
                </div>
                <div class="card-footer p-0">
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my2">
            <div class="card my-4">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            speaker_notes
                        </i>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Nomor PKH</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $PTN['no_pkh'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Jalur Masuk PTN</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['jalur_masukptn'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Universitas</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['universitas'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Program Studi</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['program_studi'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Status KIP K</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $PTN['status_kip'] ?></span>
                    </div>
                </div>
                <div class="card-footer p-0">
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>