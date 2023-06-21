<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="<?= base_url(); ?>/img/school.png" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                            <h5>Data Universitas</h5>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h6>Detail Universitas</h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class=" mb-3">
                                        <h6>Universitas</h6>
                                        <p><?= $universitas['universitas'] ?></p>

                                        <h6>Program Studi</h6>
                                        <p><?= $universitas['program_studi'] ?></p>

                                        <h6>Tahun Masuk</h6>
                                        <p><?= $universitas['tahun_masuk'] ?></p>
                                    </div>

                                    <a href="<?= base_url('/DataUniversitas') ?>" class="btn bg-gradient-secondary ">Kembali</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.container-fluid -->
<?= $this->endSection(); ?>