<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

<div class="container-fluid py-4">
    <div class="col-12">
        <div class="card mb-3">
            <div class="card-body p-3">
                <script>
                    $(function() {
                        <?php if (!empty($notif)) { ?>
                            Swal.fire({
                                icon: 'warning',
                                title: 'Perhatian!',
                                text: '<?= $notif ?>'
                            });
                        <?php } ?>
                    });
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
                <div class="container-fluid">
                    <h1 class="mt-3">UPLOAD DOKUMEN</h1>
                    <p style="border-bottom: 2px solid gray;">Jika anda ingin mengganti file yang sudah diupload. Cukup anda upload ulang saja file terbaru, maka file lama otomatis akan terhapus.</p>
                    <form method="post" action="/StoreDokumen" enctype="multipart/form-data">
                        <div class="row mb-0">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-0">
                                <button type="submit" class="btn bg-gradient-primary mb-0">Simpan Data</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mt-4">
                                    <h6 class="m-0 p-0">SKTM</h6>
                                    <?php if (!empty($dokumen['sktm'])): ?>
                                        <p class="m-0 p-0" style="font-size: 11pt;">File saat ini:
                                            <a href="<?= base_url('gambarSktm/' . $dokumen['sktm']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                        </p>
                                    <?php endif; ?>
                                    <input type="file" name="sktm" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                                </div>
                                <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-4">
                                    <h6 class="mb-0 pb-0">KTP Orang Tua</h6>
                                    <?php if (!empty($dokumen['ktp_ortu'])): ?>
                                        <p class="m-0 p-0" style="font-size: 11pt;">File saat ini:
                                            <a href="<?= base_url('gambarKtp/' . $dokumen['ktp_ortu']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                        </p>
                                    <?php endif; ?>
                                    <input type="file" name="ktp_ortu" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                                </div>
                                <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>
                                <p class="ihiy m-0 p-0" style="font-size:11pt;"><b>catatan:</b> mohon ktp kedua orang tua dijadikan 1 file pdf</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group mt-4">
                                    <h6 class="mb-0 pb-0">SK Pendapatan Orang Tua</h6>
                                    <?php if (!empty($dokumen['sk_pendapatan'])): ?>
                                        <p class="m-0 p-0" style="font-size: 11pt;">File saat ini:
                                            <a href="<?= base_url('gambarSK/' . $dokumen['sk_pendapatan']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                        </p>
                                    <?php endif; ?>
                                    <input type="file" name="sk_pendapatan" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                                </div>
                                <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>
                                <p class="ihiy m-0 p-0" style="font-size:11pt;"><b>catatan:</b> jika lebih dari 1 lembar mohon dijadikan 1 file pdf</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-4">
                                    <h6 class="mb-0 pb-0">Dokumen Pendukung Lainnya</h6>
                                    <?php if (!empty($dokumen['dokumen'])): ?>
                                        <p class="m-0 p-0" style="font-size: 11pt;">File saat ini:
                                            <a href="<?= base_url('gambarDokumen/' . $dokumen['dokumen']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                        </p>
                                    <?php endif; ?>
                                    <input type="file" name="dokumen" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                                </div>
                                <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>
                                <p class="ihiy m-0 p-0" style="font-size:11pt;"><b>catatan: kartu pkh & bukti lolos UTBK</b> (<i>screenshoot</i> pengumuman atau bukti lain jika sudah lolos)</p>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>