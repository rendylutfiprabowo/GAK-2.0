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
                        <!-- Page Heading -->
                        <h1 class="mt-3">EDIT DATA UNIVERSITAS</h1>
                        <p style="border-bottom: 2px solid gray;">Mohon isi biodata berikut sesuai dengan data diri anda! Terima Kasih!</p>
 
                        <form action="/DataUniversitas/Edit/Store" method="post">
                            <div class="row align-items-center mb-0">
                                <!-- Bagian kiri: 2 switch -->
                                <div class="col d-flex align-items-center gap-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="kip_sma" type="checkbox" id="kip_sma" <?= (!empty($univ['kip_sma']) && $univ['kip_sma'] == 1) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="kip_sma">KIP SMA</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" name="kip_kuliah" type="checkbox" id="kip_kuliah" <?= (!empty($univ['kip_kuliah']) && $univ['kip_kuliah'] == 1) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="kip_kuliah">KIP Kuliah</label>
                                    </div>
                                </div>
                                <div class="col-auto ms-auto mb-0">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary me-md-2">Simpan Data</button>
                                        <a href="/DataUniversitas" class="btn bg-gradient-secondary ms-2">Batal</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Universitas -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Nama Universitas</label>
                                        <select name="id_daftaruniversitas" class="form-control" required>
                                            <option value="">-- Pilih Universitas --</option>
                                            <?php foreach ($listUniversitas as $univ): ?>
                                                <option value="<?= $univ['id_daftaruniversitas'] ?>"
                                                    <?= $universitasListSelected == $univ['id_daftaruniversitas'] ? 'selected' : '' ?>>
                                                    <?= esc($univ['nama_daftaruniversitas']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Prodi -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Program Studi</label>
                                        <select name="id_daftarprodi" class="form-control" required>
                                            <option value="">-- Pilih Prodi --</option>
                                            <?php foreach ($listProdi as $prodi): ?>
                                                <option value="<?= $prodi['id_daftarprodi'] ?>"
                                                    <?= $prodiListSelected == $prodi['id_daftarprodi'] ? 'selected' : '' ?>>
                                                    <?= esc($prodi['nama_daftarprodi']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Jalur Masuk -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Jalur Masuk</label>
                                        <select name="id_jalurmasuk" class="form-control" required>
                                            <option value="">-- Pilih Jalur --</option>
                                            <?php foreach ($listJalurMasuk as $jalur): ?>
                                                <option value="<?= $jalur['id_jalurmasuk'] ?>"
                                                    <?= $jalurMasukSelected == $jalur['id_jalurmasuk'] ? 'selected' : '' ?>>
                                                    <?= esc($jalur['nama_jalurmasuk']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Tahun Masuk -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Tahun Masuk</label>
                                        <select name="tahun_masuk" class="form-control" required>
                                            <option value="">-- Pilih Tahun --</option>
                                            <?php
                                            $tahunSekarang = date('Y');
                                            for ($tahun = 2015; $tahun <= $tahunSekarang + 2; $tahun++):
                                            ?>
                                                <option value="<?= $tahun ?>" <?= $tahunMasuk == $tahun ? 'selected' : '' ?>>
                                                    <?= $tahun ?>
                                                </option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tambahkan class 'is-focused' pada input-group-outline jika select punya value
        document.querySelectorAll('.input-group-outline select').forEach(function(selectEl) {
            const parent = selectEl.closest('.input-group-outline');
            if (selectEl.value.trim() !== '') {
                parent.classList.add('is-focused');
            }

            selectEl.addEventListener('change', function() {
                if (this.value.trim() !== '') {
                    parent.classList.add('is-focused');
                } else {
                    parent.classList.remove('is-focused');
                }
            });
        });
    });
</script>
<?= $this->endSection(); ?>