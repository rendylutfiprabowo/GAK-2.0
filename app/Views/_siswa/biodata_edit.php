<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>

<style>
    .ahay {
        font-weight: bold;
        font-size: large;
        color: #f01c64;
    }

    .ihiy {
        margin-top: 5px;
        font-size: small;
    }
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">


<!-- ############################################################### -->
<div class="container-fluid py-4">
    <div class="row">
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



                        <!-- Page Heading -->
                        <h1 class="mt-3">EDIT BIODATA DIRI</h1>
                        <p style="border-bottom: 2px solid gray;">Mohon isi biodata berikut sesuai dengan data diri anda! Terima Kasih!</p>
                        <form action="/Biodata/Edit/Store" method="post">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="submit">Simpan</button>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 <?= old('email_address', $biodata['email_address'] ?? '') ? 'is-filled' : '' ?>">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email_address" class="form-control"
                                            value="<?= old('email_address', $biodata['email_address'] ?? '') ?>">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 <?= old('nama', $biodata['nama'] ?? '') ? 'is-filled' : '' ?>">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" value="<?= old('nama', $biodata['nama'] ?? '') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 <?= old('no_pkh', $biodata['no_pkh'] ?? '') ? 'is-filled' : '' ?>">
                                        <label class="form-label">Nomor Kartu PKH</label>
                                        <input type="text" name="no_pkh" class="form-control" value="<?= old('no_pkh', $biodata['no_pkh'] ?? '') ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Nama Pendamping PKH</label>
                                        <select name="id_pendampingpkh" class="form-control">
                                            <option value="">-- Pilih Pendamping --</option>
                                            <?php foreach ($pendampingList as $pendamping): ?>
                                                <option value="<?= $pendamping['id_pendampingpkh'] ?>"
                                                    <?= old('id_pendampingpkh', $biodata['id_pendampingpkh'] ?? '') == $pendamping['id_pendampingpkh'] ? 'selected' : '' ?>>
                                                    <?= esc($pendamping['nama_pendamping_pkh']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Kabupaten -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Kabupaten / Kota</label>
                                        <select name="id_kabupaten" id="id_kabupaten" class="form-control">
                                            <option value="">-- Pilih Kabupaten / Kota --</option>
                                            <?php foreach ($kabupatenList as $kabupaten): ?>
                                                <option value="<?= $kabupaten['id_kabupaten'] ?>"
                                                    <?= old('id_kabupaten', $biodata['id_kabupaten'] ?? '') == $kabupaten['id_kabupaten'] ? 'selected' : '' ?>>
                                                    <?= esc($kabupaten['nama_kabupaten']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Kecamatan -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Kecamatan</label>
                                        <select name="id_kecamatan" id="id_kecamatan" class="form-control">
                                            <option value="">-- Pilih Kecamatan --</option>
                                            <?php foreach ($kecamatanList as $kecamatan): ?>
                                                <option value="<?= $kecamatan['id_kecamatan'] ?>"
                                                    <?= old('id_kecamatan', $biodata['id_kecamatan'] ?? '') == $kecamatan['id_kecamatan'] ? 'selected' : '' ?>>
                                                    <?= esc($kecamatan['nama_kecamatan']) ?>
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
                                        <label class="form-label">Desa / Kelurahan</label>
                                        <select name="id_desa" id="id_desa" class="form-control">
                                            <option value="">-- Pilih Desa / Kelurahan --</option>
                                            <?php foreach ($desaList as $desa): ?>
                                                <option value="<?= $desa['id_desa'] ?>"
                                                    <?= old('id_desa', $biodata['id_desa'] ?? '') == $desa['id_desa'] ? 'selected' : '' ?>>
                                                    <?= esc($desa['nama_desa']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- SMA -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 is-filled">
                                        <label class="form-label">Asal Sekolah</label>
                                        <select name="id_SMA" class="form-control">
                                            <option value="">-- Pilih Asal Sekolah --</option>
                                            <?php foreach ($SMAList as $SMA): ?>
                                                <option value="<?= $SMA['id_SMA'] ?>"
                                                    <?= old('id_SMA', $biodata['id_SMA'] ?? '') == $SMA['id_SMA'] ? 'selected' : '' ?>>
                                                    <?= esc($SMA['nama_SMA']) ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3 <?= old('nama_ibu', $biodata['nama_ibu'] ?? '') ? 'is-filled' : '' ?>">
                                        <label class="form-label">Nama Ibu</label>
                                        <input type="text" name="nama_ibu" class="form-control" value="<?= old('nama_ibu', $biodata['nama_ibu'] ?? '') ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="input-group input-group-outline my-3 <?= old('no_whatshap', $biodata['no_whatshap'] ?? '') ? 'is-filled' : '' ?>">
                                        <label class="form-label ">No WhatsApp Siswa</label>
                                        <input type="text" name="no_whatshap" class="form-control pb-0 mb-0" value="<?= old('no_whatshap', $biodata['no_whatshap'] ?? '') ?>">
                                    </div>
                                    <p class="ihiy m-0 p-0"><b>contoh format nomor whatsapp : 0812345678901 </b></p>

                                </div>
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
    // Load Kecamatan saat edit jika ada data lama
    $(document).ready(function() {
        var selectedKabupaten = "<?= old('id_kabupaten', $biodata['id_kabupaten'] ?? '') ?>";
        var selectedKecamatan = "<?= old('id_kecamatan', $biodata['id_kecamatan'] ?? '') ?>";
        var selectedDesa = "<?= old('id_desa', $biodata['id_desa'] ?? '') ?>";

        if (selectedKabupaten) {
            $.ajax({
                url: "<?= base_url('/Biodata/Edit/GetKecamatan') ?>",
                method: "POST",
                data: {
                    id_kabupaten: selectedKabupaten
                },
                dataType: "json",
                success: function(data) {
                    $('#id_kecamatan').html('<option value="">-- Pilih Kecamatan --</option>');
                    $.each(data, function(key, value) {
                        var selected = value.id_kecamatan == selectedKecamatan ? 'selected' : '';
                        $('#id_kecamatan').append('<option value="' + value.id_kecamatan + '" ' + selected + '>' + value.nama_kecamatan + '</option>');
                    });

                    // Setelah kecamatan loaded, load desa
                    if (selectedKecamatan) {
                        $.ajax({
                            url: "<?= base_url('/Biodata/Edit/GetDesa') ?>",
                            method: "POST",
                            data: {
                                id_kecamatan: selectedKecamatan
                            },
                            dataType: "json",
                            success: function(data) {
                                $('#id_desa').html('<option value="">-- Pilih Desa / Kelurahan --</option>');
                                $.each(data, function(key, value) {
                                    var selected = value.id_desa == selectedDesa ? 'selected' : '';
                                    $('#id_desa').append('<option value="' + value.id_desa + '" ' + selected + '>' + value.nama_desa + '</option>');
                                });
                            }
                        });
                    }
                }
            });
        }
    });
</script>
<script>
    $('#id_kabupaten').change(function() {
        var id_kabupaten = $(this).val();
        if (id_kabupaten) {
            $.ajax({
                url: "<?= base_url('/Biodata/Edit/GetKecamatan') ?>",
                method: "POST",
                data: {
                    id_kabupaten: id_kabupaten
                },
                dataType: "json",
                success: function(data) {
                    $('#id_kecamatan').html('<option value="">-- Pilih Kecamatan --</option>');
                    $.each(data, function(key, value) {
                        $('#id_kecamatan').append('<option value="' + value.id_kecamatan + '">' + value.nama_kecamatan + '</option>');
                    });
                    $('#id_desa').html('<option value="">-- Pilih Desa / Kelurahan --</option>'); // reset desa
                }
            });
        }
    });

    $('#id_kecamatan').change(function() {
        var id_kecamatan = $(this).val();
        if (id_kecamatan) {
            $.ajax({
                url: "<?= base_url('/Biodata/Edit/GetDesa') ?>",
                method: "POST",
                data: {
                    id_kecamatan: id_kecamatan
                },
                dataType: "json",
                success: function(data) {
                    $('#id_desa').html('<option value="">-- Pilih Desa / Kelurahan --</option>');
                    $.each(data, function(key, value) {
                        $('#id_desa').append('<option value="' + value.id_desa + '">' + value.nama_desa + '</option>');
                    });
                }
            });
        }
    });
</script>

<?= $this->endSection(); ?>