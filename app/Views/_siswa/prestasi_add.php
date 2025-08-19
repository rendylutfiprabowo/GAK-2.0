<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

 

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-3">
        <div class="card-body p-3">
          <div class="container-fluid">
            <h1 class="mt-3">TAMBAH PRESTASI</h1>
            <p class="mb-0">Mohon <b>sertakan sertifikat juara sebagai bukti prestasi anda. Bukan sertifikat partisipasi.</b></p>
            <p class="ihiy m-0 p-0" style="font-size:10pt;border-bottom: 2px solid gray;"><b>note: </b>Hanya berlaku untuk prestasi selama 5 tahun terakhir saja!</p>
            <form action="/Prestasi/Add/Store" method="post" enctype="multipart/form-data">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button type="submit" class="btn btn-primary me-md-2">Simpan</button>
                <a href="/Prestasi" class="btn bg-gradient-secondary ms-2">Batal</a>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group input-group-outline my-3 mb-1">
                    <label class=" form-label">Nama Prestasi</label>
                    <input type="text" name="nama_prestasi" class="form-control ahay" required>
                  </div>
                  <p class="ihiy m-0 p-0" style="font-size:10pt;"><b>contoh: </b>JUARA 2 LOMBA FILM PENDEK</p>
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
                    <input type="file" name="sertifikat_prestasi"
                      class="form-control ahay" id="sertifikat_prestasi"
                      required accept=".jpg, .jpeg, .png" />
                  </div>
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
<?= $this->endSection(); ?>