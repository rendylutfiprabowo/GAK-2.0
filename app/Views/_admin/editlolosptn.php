<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="card my-4 mx-3">
        <div class="card-header py-0">
            <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">edit</i>
            </div>
        </div>
        <form action="/PKHLolosPTN/update/<?= $PTN['id_siswa'] ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body px-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                </div>
                <!-- KIP SMA, KIP KULIAH -->
                <div class="row align-items-center mt-5 mb-0">
                    <!-- Bagian kiri: 2 switch -->
                    <div class="col d-flex align-items-center gap-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="kip_sma" type="checkbox" id="kip_sma" <?= (!empty($PTN['kip_sma']) && $PTN['kip_sma'] == 1) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="kip_sma">KIP SMA</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" name="kip_kuliah" type="checkbox" id="kip_kuliah" <?= (!empty($PTN['kip_kuliah']) && $PTN['kip_kuliah'] == 1) ? 'checked' : '' ?>>
                            <label class="form-check-label" for="kip_kuliah">KIP Kuliah</label>
                        </div>
                    </div>
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        <a href="/PKHLolosPTN/detail/<?= $PTN['id_siswa'] ?>" class="btn bg-gradient-secondary ms-2">Batal</a>
                    </div>
                </div>
                <!-- EMAIL, NAMA, -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 <?= $PTN['email_address'] ? 'is-filled' : '' ?>">
                            <label class="form-label">Email</label>
                            <input name="email_address" type="email" class="form-control" value="<?= $PTN['email_address'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 <?= $PTN['nama'] ? 'is-filled' : '' ?>">
                            <label class="form-label">Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control" value="<?= $PTN['nama'] ?>" required>
                        </div>
                    </div>
                </div>
                <!-- NO. WA, NAMA IBU,  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 <?= $PTN['no_whatshap'] ? 'is-filled' : '' ?>">
                            <label class="form-label">Nomor WhatsApp</label>
                            <input name="no_whatshap" type="tel" class="form-control" value="<?= $PTN['no_whatshap'] ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 <?= $PTN['nama_ibu'] ? 'is-filled' : '' ?>">
                            <label class="form-label">Nama Ibu</label>
                            <input name="nama_ibu" type="text" class="form-control" value="<?= $PTN['nama_ibu'] ?>" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Kabupaten -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label for="id_kabupaten" class="form-label">Kabupaten / Kota</label>
                            <select name="id_kabupaten" id="id_kabupaten" class="form-control" required>
                                <option value="">-- Pilih Kabupaten --</option>
                                <?php foreach ($kabupatenList as $kabupaten): ?>
                                    <option value="<?= $kabupaten['id_kabupaten'] ?>"
                                        <?= $kabupaten['id_kabupaten'] == $PTN['id_kabupaten'] ? 'selected' : '' ?>>
                                        <?= $kabupaten['nama_kabupaten'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Kecamatan -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label for="id_kecamatan" class="form-label">Kecamatan</label>
                            <select name="id_kecamatan" id="id_kecamatan" class="form-control" required>
                                <option value="">-- Pilih Kecamatan --</option>
                                <?php foreach ($kecamatanList as $kecamatan): ?>
                                    <option value="<?= $kecamatan['id_kecamatan'] ?>"
                                        <?= $kecamatan['id_kecamatan'] == $PTN['id_kecamatan'] ? 'selected' : '' ?>>
                                        <?= $kecamatan['nama_kecamatan'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Desa -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label for="id_desa" class="form-label">Desa / Kelurahan</label>
                            <select name="id_desa" id="id_desa" class="form-control" required>
                                <option value="">-- Pilih Desa --</option>
                                <?php foreach ($desaList as $desa): ?>
                                    <option value="<?= $desa['id_desa'] ?>"
                                        <?= $desa['id_desa'] == $PTN['id_desa'] ? 'selected' : '' ?>>
                                        <?= $desa['nama_desa'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- asal sekolah  -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Asal Sekolah</label>
                            <select name="id_SMA" class="form-control" required>
                                <option value="">-- Pilih Asal Sekolah --</option>
                                <?php foreach ($SMAList as $SMA): ?>
                                    <option value="<?= $SMA['id_SMA'] ?>"
                                        <?= old('id_SMA', $PTN['id_SMA'] ?? '') == $SMA['id_SMA'] ? 'selected' : '' ?>>
                                        <?= esc($SMA['nama_SMA']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- no. pkh  -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3  <?= $PTN['no_pkh'] ? 'is-filled' : '' ?>">
                            <label class="form-label">Nomor PKH</label>
                            <input name="no_pkh" type="text" class="form-control" value="<?= $PTN['no_pkh'] ?>" required>
                        </div>
                    </div>
                    <!-- pendamping PKH  -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Nama Pendamping PKH</label>
                            <select name="id_pendampingpkh" class="form-control" required>
                                <option value="">-- Pilih Pendamping --</option>
                                <?php foreach ($pendampingList as $pendamping): ?>
                                    <option value="<?= $pendamping['id_pendampingpkh'] ?>"
                                        <?= old('id_pendampingpkh', $PTN['id_pendampingpkh'] ?? '') == $pendamping['id_pendampingpkh'] ? 'selected' : '' ?>>
                                        <?= esc($pendamping['nama_pendamping_pkh']) ?>
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
                                        <?= $jalurMasukSelected == $jalur['id_jalurmasuk'] ? 'selected' : '' ?>
                                        <?= old('id_jalurmasuk', $PTN['id_jalurmasuk'] ?? '') == $jalur['id_jalurmasuk'] ? 'selected' : '' ?>>
                                        <?= esc($jalur['nama_jalurmasuk']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Universitas -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Nama Universitas</label>
                            <select name="id_daftaruniversitas" class="form-control" required>
                                <option value="">-- Pilih Universitas --</option>
                                <?php foreach ($listUniversitas as $univ): ?>
                                    <option value="<?= $univ['id_daftaruniversitas'] ?>"
                                        <?= old('id_daftaruniversitas', $PTN['id_daftaruniversitas'] ?? '') == $univ['id_daftaruniversitas'] ? 'selected' : '' ?>>
                                        <?= esc($univ['nama_daftaruniversitas']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Prodi -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Program Studi</label>
                            <select name="id_daftarprodi" class="form-control" required>
                                <option value="">-- Pilih Prodi --</option>
                                <?php foreach ($listProdi as $prodi): ?>
                                    <option value="<?= $prodi['id_daftarprodi'] ?>"
                                        <?= old('id_daftarprodi', $PTN['id_daftarprodi'] ?? '') == $prodi['id_daftarprodi'] ? 'selected' : '' ?>>
                                        <?= esc($prodi['nama_daftarprodi']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- tahun masuk  -->
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Tahun Masuk</label>
                            <select name="tahun_masuk" class="form-control" required>
                                <option value="">-- Pilih Tahun --</option>
                                <?php
                                $tahunSekarang = date('Y');
                                for ($tahun = 2015; $tahun <= $tahunSekarang + 2; $tahun++):
                                ?>
                                    <option value="<?= $tahun ?>"
                                        <?= old('tahun_masuk', $PTN['tahun_masuk']) == $tahun ? 'selected' : '' ?>>
                                        <?= esc($tahun) ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- upload dokumen -->
                <div class="row">
                    <p style="border-bottom: 2px solid gray;" class="my-3"></p>
                    <div class="col-md-6">
                        <div class="form-group mt-4">
                            <h6 class="mb-0 pb-0">SKTM</h6>
                            <?php if (!empty($dokumen['sktm'])): ?>
                                <p class="mt-0 pb-0 " style="font-size: 11pt;">
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
                                <p class="mt-0 pb-0" style="font-size: 11pt;">File saat ini:
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
                                <p class="mt-0 pb-0" style="font-size: 11pt;">File saat ini:
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
                                <p class="mt-0 pb-0" style="font-size: 11pt;">File saat ini:
                                    <a href="<?= base_url('gambarDokumen/' . $dokumen['dokumen']) ?>" target="_blank"><b><u>Lihat</u></b></a>
                                </p>
                            <?php endif; ?>
                            <input type="file" name="dokumen" class="btn bg-gradient-secondary mb-1" accept=".pdf" />
                        </div>
                        <p class="ihiy m-0 p-0" style="font-size:11pt;">format file:<b> .pdf</b></p>
                        <p class="ihiy m-0 p-0" style="font-size:11pt;"><b>catatan: kartu pkh & bukti lolos UTBK</b> (<i>screenshoot</i> pengumuman atau bukti lain jika sudah lolos)</p>

                    </div>
                </div>

                <!-- Prestasi  -->
                <div class="row">
                    <p style="border-bottom: 2px solid gray;" class="my-3"></p>
                    <div class="col-md-12">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#modal-add-prestasi">
                                Tambah Prestasi
                            </button>
                        </div>
                        <table class="table align-items-center mb-0" style="border: 1cm;">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-uppercase">No</th>
                                    <th class="text-uppercase">Nama Prestasi</th>
                                    <th class="text-uppercase">Tingkat Prestasi</th>
                                    <th class="text-uppercase">Tahun Prestasi</th>
                                    <th class="text-uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                if (!empty($prestasi)): ?>
                                    <?php foreach ($prestasi as $row): ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td><?= esc($row['nama_prestasi']) ?></td>
                                            <td class="text-center"><?= esc($row['tingkat_prestasi']) ?></td>
                                            <td class="text-center"><?= esc($row['tahun_prestasi']) ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('gambarSertifikat/' . $row['sertifikat_prestasi']) ?>" target="_blank">
                                                    <i class="material-icons mx-1 my-1">visibility</i>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal-edit-<?= $row['id_prestasisiswa'] ?>">
                                                    <i class="material-icons mx-1 my-1">edit</i>
                                                </a>
                                                <a href="<?= base_url('PKHLolosPTN/edit/deletePrestasi/' . $row['id_prestasisiswa']) ?>" onclick="return confirm('Yakin hapus?')">
                                                    <i class="material-icons mx-1 my-1">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4" class="text-center">Belum ada data prestasi</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row align-items-center mt-5 mb-0">
                    <div class="col-auto ms-auto mb-0">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                        <a href="/PKHLolosPTN/detail/<?= $PTN['id_siswa'] ?>" class="btn bg-gradient-secondary ms-2">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Prestasi -->
<?php foreach ($prestasi as $row): ?>
    <div class="modal fade" id="modal-edit-<?= $row['id_prestasisiswa'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="modal-header pb-0 text-left">
                            <h5 class="">Edit Prestasi</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/PKHLolosPTN/updatePrestasi/<?= $row['id_prestasisiswa'] ?>" method="POST" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-auto ms-auto mb-0">
                                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                                        <button type="button" class="btn bg-gradient-secondary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">Batal</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id_prestasisiswa" value="<?= esc($row['id_prestasisiswa']) ?>">
                                        <input type="hidden" name="user_id" value="<?= esc($row['user_id']) ?>">

                                        <div class="input-group input-group-outline my-3 mb-1 is-filled">
                                            <label class="form-label">Nama Prestasi</label>
                                            <input type="text" name="nama_prestasi" value="<?= esc($row['nama_prestasi']) ?>" class="form-control">
                                        </div>
                                        <p class="ihiy m-0 p-0" style="font-size:10pt;"><b>contoh: </b>JUARA 2 LOMBA FILM PENDEK</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline my-3 is-filled">
                                            <label class="form-label">Tingkat Prestasi</label>
                                            <select name="tingkat_prestasi" class="form-control">
                                                <option value="KOTA/KABUPATEN" <?= $row['tingkat_prestasi'] == 'KOTA/KABUPATEN' ? 'selected' : '' ?>>KOTA/KABUPATEN</option>
                                                <option value="PROVINSI" <?= $row['tingkat_prestasi'] == 'PROVINSI' ? 'selected' : '' ?>>PROVINSI</option>
                                                <option value="REGIONAL" <?= $row['tingkat_prestasi'] == 'REGIONAL' ? 'selected' : '' ?>>REGIONAL</option>
                                                <option value="NASIONAL" <?= $row['tingkat_prestasi'] == 'NASIONAL' ? 'selected' : '' ?>>NASIONAL</option>
                                                <option value="INTERNASIONAL" <?= $row['tingkat_prestasi'] == 'INTERNASIONAL' ? 'selected' : '' ?>>INTERNASIONAL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline my-3 is-filled">
                                            <label class="form-label">Tahun Prestasi</label>
                                            <select name="tahun_prestasi" class="form-control">
                                                <?php
                                                $tahunSekarang = date('Y');
                                                for ($i = 0; $i < 5; $i++) {
                                                    $tahun = $tahunSekarang - $i;
                                                    $selected = $row['tahun_prestasi'] == $tahun ? 'selected' : '';
                                                    echo "<option value=\"$tahun\" $selected>$tahun</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline my-3 mb-1  is-filled">
                                            <label for="sertifikat_prestasi" class="form-label  ">Upload Sertifikat Anda</label>
                                            <input type="file" name="sertifikat_prestasi" class="form-control " id="sertifikat_prestasi" accept=".jpg, .jpeg, .png" /> <br>
                                        </div>
                                        <p class="ihiy m-0 p-0 blue" style="font-size:10pt;"><b><u><a href="<?= base_url('gambarSertifikat/' . $row['sertifikat_prestasi']) ?>">Lihat File</a></u></b></p>
                                        <p class="ihiy m-0 p-0" style="font-size:10pt;"><b>format file: </b> JPG, JPEG, PNG</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Tambah Prestasi  -->
<div class="modal fade" id="modal-add-prestasi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="modal-header pb-0 text-left">
                        <h5 class="">Tambah Prestasi</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/PKHLolosPTN/edit/storeAddPrestasi/<?= $PTN['id_siswa'] ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="user_id" value="<?= $PTN['user_id'] ?>">
                                    <input type="hidden" name="id_siswa" value="<?= $PTN['id_siswa'] ?>">
                                    <div class="input-group input-group-outline my-3 mb-1">
                                        <label class="form-label">Nama Prestasi</label>
                                        <input type="text" name="nama_prestasi" class="form-control ahay" required>
                                    </div>
                                    <p class="ihiy m-0 p-0" style="font-size:10pt;">
                                        <b>contoh: </b>JUARA 2 LOMBA FILM PENDEK
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Tingkat Prestasi</label>
                                        <select name="tingkat_prestasi" class="form-control" required>
                                            <option value="">-- Pilih Tingkat Prestasi --</option>
                                            <option value="KOTA/KABUPATEN">KOTA/KABUPATEN</option>
                                            <option value="PROVINSI">PROVINSI</option>
                                            <option value="REGIONAL">REGIONAL</option>
                                            <option value="NASIONAL">NASIONAL</option>
                                            <option value="INTERNASIONAL">INTERNASIONAL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Tahun Prestasi</label>
                                        <select name="tahun_prestasi" class="form-control ahay" required>
                                            <option value="">-- Pilih Tahun --</option>
                                            <?php
                                            $tahunSekarang = date('Y');
                                            for ($i = 0; $i < 5; $i++) {
                                                $tahun = $tahunSekarang - $i;
                                                echo "<option value=\"$tahun\">$tahun</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 mb-1 is-filled">
                                        <label for="sertifikat_prestasi" class="form-label">Upload Sertifikat Anda</label>
                                        <input type="file" name="sertifikat_prestasi" class="form-control ahay" id="sertifikat_prestasi" required accept=".jpg, .jpeg, .png">
                                    </div>
                                    <p class="ihiy m-0 p-0" style="font-size:10pt;">
                                        <b>format file: </b> JPG, JPEG, PNG
                                    </p>
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                <button type="submit" class="btn btn-primary me-md-2">Simpan</button>
                                <button type="button" class="btn bg-gradient-secondary ms-2" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        // Jika kabupaten dipilih
        $('#id_kabupaten').change(function() {
            var idKabupaten = $(this).val();
            if (idKabupaten) {
                $.ajax({
                    url: "/getKecamatan/" + idKabupaten,
                    type: "GET",
                    success: function(data) {
                        $('#id_kecamatan').html('<option value="">-- Pilih Kecamatan --</option>');
                        $.each(data, function(key, value) {
                            $('#id_kecamatan').append('<option value="' + value.id_kecamatan + '">' + value.nama_kecamatan + '</option>');
                        });
                        $('#id_desa').html('<option value="">-- Pilih Desa --</option>'); // reset desa
                    }
                });
            }
        });

        // Jika kecamatan dipilih
        $('#id_kecamatan').change(function() {
            var idKecamatan = $(this).val();
            if (idKecamatan) {
                $.ajax({
                    url: "/getDesa/" + idKecamatan,
                    type: "GET",
                    success: function(data) {
                        $('#id_desa').html('<option value="">-- Pilih Desa --</option>');
                        $.each(data, function(key, value) {
                            $('#id_desa').append('<option value="' + value.id_desa + '">' + value.nama_desa + '</option>');
                        });
                    }
                });
            }
        });

    });
</script>


<?= $this->endSection() ?>