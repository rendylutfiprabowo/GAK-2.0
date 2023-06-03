<?= $this->extend('_admin/templateadmin') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Graphic</h6>
          </div>
          <div class="card-body px-0 ">
            <!-- <div class="card mb-3"> -->
              <div class="card-body p-3">
                <div class="chart">
                  <canvas id="chart-pie1" class="chart-canvas" height="300px"></canvas>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<?= $this->endSection() ?>