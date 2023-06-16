<?= $this->extend('_siswa/templatesiswa'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-3">
        <div class="card-body p-3">

          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="mt-3">PRESTASI</h1>
            <p style="border-bottom: 2px solid gray;">Jika anda <b>sudah lulus tes masuk kuliah, mohon isi </b>form berikut sesuai dengan data universitas anda!. <b>Jika belum mohon abaikan</b>! Terima Kasih!</p>
            <div class="table-responsive p-0">

              <button style="margin-right: 8px;" type="button" class="btn btn-outline-primary  mb-0" data-bs-toggle="modal" data-bs-target="#import"><i class="material-icons">add</i>
                Tambah Data
              </button>
              <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog mt-lg-10">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalLabel">Upload Sertifikat</h5>
                      <i class="material-icons ms-3">file_upload</i>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="input-group input-group-static mb-4">
                        <label>Nama Prestasi</label>
                        <input type="text" name="nama_prestasi" class="form-control ahay ahay">
                      </div>
                      <p>Mohon upload sesuai dengan format file .jpg, .png</p>
                      <div class="input-group input-group-dynamic mb-3">
                        <form method="post" action="/StorePrestasi" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="file">Pilih File Disini</label><br>
                            <input type="file" name="upload_prestasi" class="btn bg-gradient-secondary " id="file" required accept=".jpg, .png" required />
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary " data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn bg-gradient-primary ">Upload</button>
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
    </div>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#example1').DataTable({});
      });
    </script>


  </div>
  <!-- /.container-fluid -->
  <?= $this->endSection(); ?>