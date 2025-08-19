<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

<style>
    p {
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>
<?php if (!empty($notif)): ?>
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Perhatian',
            text: '<?= $notif ?>',
            confirmButtonText: 'OK'
        });
    </script>
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
<?php endif; ?>

<div class="container-fluid py-4">
    <div class="ms-auto my-auto mt-lg-0 mt-4 mb-3">
        <div class="ms-auto my-auto">
            <a href="/PKHLolosPTN" style="margin-right: 8px;" class="btn bg-gradient-warning  mb-0"> <i class="material-icons">arrow_back</i></a>
            <a href="/PKHLolosPTN/edit/<?= $PTN['id_siswa'] ?>" class=" btn bg-gradient-primary mb-0"> <i class="material-icons">edit</i> Edit </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6  ">
            <div class="card my-4 mb-2  ">
                <div class="card-header py-2 ">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            key
                        </i>
                    </div>
                </div>
                <div class="card-body px-0  pt-3 ">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Email</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['email_address'] ?? 'BELUM DI ISI' ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Username</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['username'] ?? 'BELUM DI ISI' ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Password</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['password'] ?? 'BELUM DI ISI' ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="card my-4 mb-2">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            person_pin
                        </i>
                    </div>
                </div>
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Nama Siswa</p>
                        <span class="text-success text-sm font-weight-bolder text-uppercase"><?= $PTN['nama']  ?? 'BELUM DI ISI' ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Nomor Telepon Seluler</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['no_whatshap']  ?? 'BELUM DI ISI' ?></span>
                        <p class="text-sm mb-0 text-capitalize">Nama Ibu</p>
                        <span class="text-success text-sm font-weight-bolder text-uppercase "><?= $PTN['nama_ibu']  ?? 'BELUM DI ISI' ?></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card my-4 mb-2">
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
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['kabupaten_kota']  ?? 'BELUM DI ISI' ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Kecamatan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['kecamatan']  ?? 'BELUM DI ISI' ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Desa / Kelurahan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['desa']  ?? 'BELUM DI ISI' ?></span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card my-4 mb-2">
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
                        <span class="text-success text-sm font-weight-bolder "><?= $PTN['no_pkh']  ?? 'BELUM DI ISI' ?></span>
                        <p class="text-sm mb-0 text-capitalize">Pendamping PKH</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $PTN['pendampingpkh']  ?? 'BELUM DI ISI' ?></span>
                        <p class="text-sm mb-0 text-capitalize">KIP SMA</p>
                        <span class="text-success text-sm font-weight-bolder ">
                            <?php
                            if ($PTN['kip_sma'] == 1) {
                                echo 'YA';
                            } elseif ($PTN['kip_sma'] == 0) {
                                echo 'TIDAK';
                            } else {
                                echo 'TIDAK MENERIMA BANTUAN';
                            }
                            ?>
                        </span>
                        <p class="text-sm mb-0 text-capitalize">KIP Kuliah</p>
                        <span class="text-success text-sm font-weight-bolder ">
                            <?php
                            if ($PTN['kip_kuliah'] == 1) {
                                echo 'YA';
                            } elseif ($PTN['kip_kuliah'] == 0) {
                                echo 'TIDAK';
                            } else {
                                echo 'TIDAK MENERIMA BANTUAN';
                            }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card my-4 mb-2">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            school
                        </i>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Asal Sekolah</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $PTN['asal_sekolah']  ?? 'BELUM DI ISI' ?></span>
                        <p class="text-sm mb-0 text-capitalize">Jalur Masuk PTN</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['jalur_masukptn']  ?? 'BELUM DI ISI' ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Universitas</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['universitas']  ?? 'BELUM DI ISI' ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Program Studi</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['program_studi']   ?? 'BELUM DI ISI' ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Tahun Masuk Kuliah</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $PTN['tahun_masuk']   ?? 'BELUM DI ISI' ?></span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card my-4 mb-2">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            file_open
                        </i>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="card-header m-0">

                        <p class="text-sm mb-0 text-capitalize">SKTM</p>
                        <span class="text-success text-sm font-weight-bolder">
                            <?php if (!empty($dokumen['sktm'])): ?>
                                <a href="<?= base_url('gambarSktm/' . $dokumen['sktm']) ?>" target="_blank" class="text-success">
                                    <b><u><?= $dokumen['sktm'] ?></u></b>
                                </a>
                            <?php else: ?>
                                BELUM UPLOAD
                            <?php endif; ?>
                        </span><br>

                        <p class="text-sm mb-0 text-capitalize">KTP Orang Tua</p>
                        <span class="text-success text-sm font-weight-bolder">
                            <?php if (!empty($dokumen['ktp_ortu'])): ?>
                                <a href="<?= base_url('gambarKtp/' . $dokumen['ktp_ortu']) ?>" target="_blank" class="text-success">
                                    <b><u><?= $dokumen['ktp_ortu'] ?></u></b>
                                </a>
                            <?php else: ?>
                                BELUM UPLOAD
                            <?php endif; ?>
                        </span><br>

                        <p class="text-sm mb-0 text-capitalize">Surat Keterangan Pendapatan</p>
                        <span class="text-success text-sm font-weight-bolder">
                            <?php if (!empty($dokumen['sk_pendapatan'])): ?>
                                <a href="<?= base_url('gambarSK/' . $dokumen['sk_pendapatan']) ?>" target="_blank" class="text-success">
                                    <b><u><?= $dokumen['sk_pendapatan'] ?></u></b>
                                </a>
                            <?php else: ?>
                                BELUM UPLOAD
                            <?php endif; ?>
                        </span><br>

                        <p class="text-sm mb-0 text-capitalize">Dokumen Tambahan</p>
                        <span class="text-success text-sm font-weight-bolder">
                            <?php if (!empty($dokumen['dokumen'])): ?>
                                <a href="<?= base_url('gambarDokumen/' . $dokumen['dokumen']) ?>" target="_blank" class="text-success">
                                    <b><u><?= $dokumen['dokumen'] ?></u></b>
                                </a>
                            <?php else: ?>
                                BELUM UPLOAD
                            <?php endif; ?>
                        </span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card my-4 mb-2">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            grade
                        </i>
                    </div>
                </div>
                <div class="card-body mt-3">
                    <table class="table align-items-center mb-0" style="border: 1cm;">
                        <thead class="text-center">
                            <tr>
                                <th class="text-uppercase">No</th>
                                <th class="text-uppercase">Nama Prestasi</th>
                                <th class="text-uppercase">Tingkat Prestasi</th>
                                <th class="text-uppercase">Tahun Prestasi</th>
                                <th class="text-uppercase">Lihat</th>
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
        </div>
    </div>
</div>

<?= $this->endSection() ?>