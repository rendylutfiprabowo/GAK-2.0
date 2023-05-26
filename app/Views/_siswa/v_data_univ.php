<?= $this->extend('tempelate/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Universitas</h1>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Universitas</label>

        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="jurusan">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Tahun Masuk</label>

        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">Simpan dan Lanjutkan</button>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>