<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

<style>
  .yay1 {
    font-size: 50px;
  }
</style>


<div class="container-fluid py-4">

  <!-- Page Heading -->
  <h1 class="mt-3" style="border-bottom: 2px solid gray;">DASHBOARD</h1>
  <div class="row my-4">
    <!-- card siswa login -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Siswa Login</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahSiswa ?></div>
            </div>
            <div class="col-auto">
              <i class="yay1 material-icons">people</i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card biodata -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Biodata</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahBiodata ?></div>
            </div>
            <div class="col-auto">
              <i class="yay1 material-icons">account_circle</i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- card univ -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Universitas
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlahUniversitas ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="yay1 material-icons">business</i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--card prestasi -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Prestasi</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahPrestasi ?></div>
            </div>
            <div class="col-auto">
              <i class="yay1 material-icons">school</i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card upload -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Dokumen</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahUpload ?></div>
            </div>
            <div class="col-auto">
              <i class="yay1 material-icons">folder_shared</i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-6 ">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Persentase Per Kabupaten</h6>
          </div>
        </div>
        <div class="card-body pb-0 p-3 mt-4">
          <!-- <div class="alert alert-warning text-white" role="alert">
            <span class="alert-icon align-middle">
              <span class="material-icons text-md">
                warning
              </span>
            </span>
            <span class="alert-text"><strong>Mohon Import Data Lebih Dahulu!</strong> Karena data masih kosong</span>
          </div> -->

          <div class="row">
            <div class="col-12 text-start">
              <div class="chart">
                <canvas id="chart-pie1" class="chart-canvas" width="500" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
          <div class="w-60">
            <p class="text-sm mt-4">
              Jadi, total untuk ?????????????? <b>xxx</b>.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6 ">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Persentase Per Kampus</h6>
          </div>
        </div>
        <div class="card-body pb-0 p-3 mt-4">
          <!-- <div class="alert alert-warning text-white" role="alert">
            <span class="alert-icon align-middle">
              <span class="material-icons text-md">
                warning
              </span>
            </span>
            <span class="alert-text"><strong>Mohon Import Data Lebih Dahulu!</strong> Karena data masih kosong</span>
          </div> -->

          <div class="row">
            <div class="col-12 text-start">
              <div class="chart">
                <canvas id="chart-pie1" class="chart-canvas" width="500" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
          <div class="w-60">
            <p class="text-sm mt-4">
              Jadi, total untuk ?????????????? <b>xxx</b>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="card mb-3">
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="bar-chart1" class="chart-canvas" height="300px"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>