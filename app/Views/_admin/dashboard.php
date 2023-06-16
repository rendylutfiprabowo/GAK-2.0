<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

<div class="row">
  <div class="col-6 col-lg-2 col-md-6">
    <div class="card">
      <div class="card-body px-4 py-4-5">
        <div class="row">
          <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
            <div class="stats-icon purple mb-2">
              <i class="iconly-boldShow"></i>
            </div>
          </div>
          <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
            <h6 class="text-muted font-semibold">Siswa</h6>
            <h6 class="font-extrabold mb-0"><?= $jumlahSiswa ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6 col-lg-2 col-md-6">
    <div class="card">
      <div class="card-body px-4 py-4-5">
        <div class="row">
          <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
            <div class="stats-icon blue mb-2">
              <i class="iconly-boldProfile"></i>
            </div>
          </div>
          <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
            <h6 class="text-muted font-semibold">Biodata</h6>
            <h6 class="font-extrabold mb-0"><?= $jumlahBiodata ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6 col-lg-2 col-md-6">
    <div class="card">
      <div class="card-body px-4 py-4-5">
        <div class="row">
          <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
            <div class="stats-icon green mb-2">
              <i class="iconly-boldAdd-User"></i>
            </div>
          </div>
          <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
            <h6 class="text-muted font-semibold">Data Univ</h6>
            <h6 class="font-extrabold mb-0"><?= $jumlahUniversitas ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-6 col-lg-2 col-md-6">
    <div class="card">
      <div class="card-body px-4 py-4-5">
        <div class="row">
          <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
            <div class="stats-icon red mb-2">
              <i class="iconly-boldBookmark"></i>
            </div>
          </div>
          <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
            <h6 class="text-muted font-semibold">Prestasi</h6>
            <h6 class="font-extrabold mb-0"><?= $jumlahPrestasi ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-6 col-lg-2 col-md-6">
    <div class="card">
      <div class="card-body px-4 py-4-5">
        <div class="row">
          <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
            <div class="stats-icon red mb-2">
              <i class="iconly-boldBookmark"></i>
            </div>
          </div>
          <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
            <h6 class="text-muted font-semibold">Dokumen</h6>
            <h6 class="font-extrabold mb-0"><?= $jumlahUpload ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-4">
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