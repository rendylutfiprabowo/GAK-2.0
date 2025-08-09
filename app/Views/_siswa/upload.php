<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

<script>
    $(function() {
        <?php if (!empty($notif)) { ?>
            Swal.fire({
                icon: 'warning',
                title: 'Perhatian!',
                text: '<?= $notif ?>'
            });
        <?php } ?>

        <?php if (session()->has("success")) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Great!',
                text: '<?= session("success") ?>'
            });
        <?php } ?>
    });
</script>

<div class="container-fluid py-4">

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

                    <h1 style="border-bottom: 2px solid gray;" class="my-3">UPLOAD DOKUMEN</h1>

                    <div class="input-group  mb-3">
                        <form method="post" action="/StoreDokumen" enctype="multipart/form-data">
                            <div class="form-group mt-4">
                                <h6 class="mb-0 pb-0">SKTM</h6>
                                <?php if (!empty($dokumen['sktm'])): ?>
                                    <p class="mt-0 pb-0" style="font-size: 11pt;">File saat ini:
                                        <a href="<?= base_url('gambarSktm/' . $dokumen['sktm']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                    </p>
                                <?php endif; ?>
                                <input type="file" name="sktm" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                            </div>
                            <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>

                            <p style="border-top: 1px solid gray;"></p>
                            <div class="form-group mt-4">
                                <h6 class="mb-0 pb-0">KTP Orang Tua</h6>
                                <?php if (!empty($dokumen['ktp_ortu'])): ?>
                                    <p class="mt-0 pb-0" style="font-size: 11pt;">File saat ini:
                                        <a href="<?= base_url('gambarKtp/' . $dokumen['ktp_ortu']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                    </p>
                                <?php endif; ?>
                                <input type="file" name="ktp_ortu" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                            </div>
                            <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>
                            <p class="ihiy m-0 p-0" style="font-size:11pt;"><b>catatan:</b> mohon ktp kedua orang tua dijadikan 1 file pdf</p>



                            <p style="border-top: 1px solid gray;"></p>
                            <div class="form-group mt-4">
                                <h6 class="mb-0 pb-0">SK Pendapatan Orang Tua</h6>
                                <?php if (!empty($dokumen['sk_pendapatan'])): ?>
                                    <p class="mt-0 pb-0" style="font-size: 11pt;">File saat ini:
                                        <a href="<?= base_url('gambarSK/' . $dokumen['sk_pendapatan']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                    </p>
                                <?php endif; ?>
                                <input type="file" name="sk_pendapatan" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                            </div>
                            <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>
                            <p class="ihiy m-0 p-0" style="font-size:11pt;"><b>catatan:</b> jika lebih dari 1 lembar mohon dijadikan 1 file pdf</p>



                            <p style="border-top: 1px solid gray;"></p>
                            <div class="form-group mt-4">
                                <h6 class="mb-0 pb-0">Dokumen Pendukung Lainnya</h6>
                                <?php if (!empty($dokumen['dokumen'])): ?>
                                    <p class="mt-0 pb-0" style="font-size: 11pt;">File saat ini:
                                        <a href="<?= base_url('gambarDokumen/' . $dokumen['dokumen']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                    </p>
                                <?php endif; ?>
                                <input type="file" name="dokumen" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                            </div>
                            <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>
                            <p class="ihiy m-0 p-0" style="font-size:11pt;"><b>catatan: kartu pkh & bukti lolos UTBK</b> (<i>screenshoot</i> pengumuman atau bukti lain jika sudah lolos)</p>

                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary  " data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary ">Sumbit All</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection(); ?>