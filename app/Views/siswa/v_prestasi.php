<?= $this->extend('tempelate/index'); ?>

<?= $this->section('page-content'); ?>

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