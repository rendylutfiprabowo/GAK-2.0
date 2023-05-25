<?= $this->extend('tempelate/index'); ?>

<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Biodata</h1>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama lengkap">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">No PKH</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="no pkh">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Asal Wilayah</label>

        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Asal Sekolah</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="asal sekolah">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama Ibu</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama ibu">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nama Pendamping PKH</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama pendamping pkh">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Program Studi</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="program studi">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">No WA/Hp</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="no wa/hp">
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="button">Simpan dan Lanjutkan</button>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>