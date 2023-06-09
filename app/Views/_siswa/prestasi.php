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
            <button style="margin-right: 8px;" type="button" class="btn btn-outline-primary  mb-0" data-bs-toggle="modal" data-bs-target="#import"><i class="material-icons">add</i>
              Tambah Data
            </button>
            <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog mt-lg-10">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Import XLSX</h5>
                    <i class="material-icons ms-3">file_upload</i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Mohon upload dengan sesuai dengan template / format (format file xlsx)</p>
                    <a href="/caring/downloadtemplate"><button class="btn bg-gradient-warning">Download Template</button></a>
                    <div class="input-group input-group-dynamic mb-3">
                      <form method="post" action="/datapelanggan/caring/edit/import" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="file">Pilih File Disini</label><br>
                          <input type="file" name="fileexcel" class="btn bg-gradient-secondary " id="file" required accept=".xls, .Xlsx" required />
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
            <h1 class="mt-3">PRESTASI</h1>
            <p style="border-bottom: 2px solid gray;">Jika anda <b>sudah lulus tes masuk kuliah, mohon isi </b>form berikut sesuai dengan data universitas anda!. <b>Jika belum mohon abaikan</b>! Terima Kasih!</p>
            <div class="table-responsive p-0">
              <table id="example1" class="table table-hover align-items-center mb-0">
                <thead class="thead-light">
                  <tr>
                    <th class="text-center text-uppercase text-xxs font-weight-bolder">
                      <p><b>Prestasi tercapai</b></p>
                    </th>
                    <th class="text-center text-uppercase text-xxs font-weight-bolder">
                      <p><b>Penyelenggara</b></p>
                    </th>
                    <th class="text-center text-uppercase text-xxs font-weight-bolder">
                      <p><b>Tingkat</b></p>
                    </th>
                    <th class="text-center text-uppercase text-xxs font-weight-bolder">
                      <p><b>Tahun</b></p>
                    </th>
                    <th class="text-center text-uppercase text-xxs font-weight-bolder">
                      <p><b>Keterangan</b></p>
                    </th>
                    <th class="text-center text-uppercase text-xxs font-weight-bolder">
                      <p><b>Detail</b></p>
                    </th>
                  </tr>
                </thead>
            </div>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="img/user.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">y</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <h6 class="mb-0 text-sm">y</h6>
                </td>
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-sm">y</h6>
                </td>
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-sm">y</h6>
                </td>
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-sm">y</h6>
                </td>
                <td class="align-middle text-center">
                  <a href="/PKHLolosPTN/detail/y">
                    <span style="justify-content: center;" class="badge badge-sm bg-gradient-info"><i class="material-icons">mode_edit</i></span>
                  </a>
                  <a href="/PKHLolosPTN/delete/y">
                    <span style="justify-content: center;" class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
                  </a>
                </td>
              </tr>
            </tbody>
            </table>
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
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Prestasi</h1>

    <div class="card-header">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="modalTambah">
        <i class="fa fa-plus"> Tambah Data </i>
      </button>
    </div>

    <div class="card-body">
      <div class="col-lg-8">

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Prestasi</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">No Wa/Hp</th>
              <th scope="col">Menu</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>
                <button type="button" data-toggle="modalUbah" class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i></button>
                <button type="button" data-toggle="modalHapus" class="btn btn-sm btn-danger"> <i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@mdo</td>
              <td>
                <button type="button" data-toggle="modalUbah" class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i></button>
                <button type="button" data-toggle="modalHapus" class="btn btn-sm btn-danger"> <i class="fa fa-trash-alt"></i></button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry </td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>@mdo</td>
              <td>
                <button type="button" data-toggle="modalEdit" class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i></button>
                <button type="button" data-toggle="modalHapus" class="btn btn-sm btn-danger"> <i class="fa fa-trash-alt"></i></button>
              </td>

            </tr>
          </tbody>
        </table>

      </div>

    </div>

    <!-- modal box edit data -->
    <div class="modal fade" id="modalEdit">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Prestasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('siswa/edit'); ?>" method="post">
              <div class="form-group mb-0">
                <label for="nama"></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Prestasi">
              </div>
              <div class="form-group mb-0">
                <label for="nama"></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Prestasi">
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="edit" class="btn btn-primary">EditData</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- modal box tambah data -->
    <div class="modal fade" id="modalTambah">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Prestasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('siswa/tambah'); ?>" method="post">
              <div class="form-group mb-0">
                <label for="nama"></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Prestasi">
              </div>
              <div class="form-group mb-0">
                <label for="nama"></label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Prestasi">
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- modal box hapus data -->
    <div class="modal fade" id="modalHapus">
      <div class="modal-dialog" role="documet">
        <div class="modal-content">
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus data ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            <a href="" class="btn btn-primary">Yakin</a>

          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- /.container-fluid -->
  <?= $this->endSection(); ?>