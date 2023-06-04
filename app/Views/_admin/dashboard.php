<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

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