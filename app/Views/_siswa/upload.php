<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Upload KIPK</h1>

    <div class="mb-3">
        <label for="formFile" class="form-label">SKTM</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">KTP Orang Tua</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Kartu KIP</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">SK Pendapatan Orang Tua</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Dokumen Pendukung Lainnya</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">Submit All</button>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>