<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: .5rem;">
                <div class="row g-0">
                    <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="<?= base_url(); ?>/img/users.png" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                        <h5><?= $siswabiodata['nama'] ?></h5>
                    </div>

                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h6>Detail Biodata</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Nama Lengkap</h6>
                                    <p>
                                        <?= $siswabiodata['nama'] ?>
                                    </p>

                                    <h6>Email</h6>
                                    <p><?= $siswabiodata['email_address'] ?></p>

                                    <h6>Nomor PKH</h6>
                                    <p><?= $siswabiodata['no_pkh'] ?></p>

                                    <h6>Nama Ibu</h6>
                                    <p><?= $siswabiodata['nama_ibu'] ?></p>

                                    <h6>Asal Wilayah</h6>
                                    <p><?= $siswabiodata['asal_wilayah'] ?></p>

                                    <h6>Asal Sekolah</h6>
                                    <p><?= $siswabiodata['asal_sekolah'] ?></p>

                                    <h6>Nomor WhatsApp</h6>
                                    <p><?= $siswabiodata['no_whatshap'] ?></p>

                                    <h6>Nama Pendamping</h6>
                                    <p><?= $siswabiodata['nama_pendamping'] ?></p>
                                </div>

                                <a href="<?= base_url('/Biodata') ?>" class="btn bg-gradient-secondary ">Kembali</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<?= $this->endSection(); ?>