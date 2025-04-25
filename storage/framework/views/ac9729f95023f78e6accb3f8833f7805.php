<?php $__env->startSection('contens'); ?>
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-lg-3 col-md-4 mt-md-0 mt-4"style="background-color:rgb(82, 14, 35)">
            <div class="d-flex">
              <div class="wrapper">
                <h3 class="mb-0 font-weight-semibold text-white">32,451$</h3>
                <h5 class="mb-0 font-weight-medium text-primary">Sale Product</h5>
                <p class="mb-0 text-muted">+14.00(+0.50%)</p>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-md-0 mt-4"style="background-color:rgb(12, 164, 35) ">
            <div class="d-flex">
              <div class="wrapper">
                <h3 class="mb-0 font-weight-semibold text-white">100000$</h3>
                <h5 class="mb-0 font-weight-medium text-primary">Total Porduct in Sale</h5>
                <p class="mb-0 text-muted">+138.97(+0.54%)</p>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-2">in Stock</canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-md-0 mt-4" style="background-color:rgb(29, 63, 127) ">
            <div class="d-flex">
              <div class="wrapper">
                <h3 class="mb-0 font-weight-semibold text-white">7,688$</h3>
                <h5 class="mb-0 font-weight-medium text-primary">Expense</h5>
                <p class="mb-0 text-muted">+57.62(+0.76%)</p>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-md-0 mt-4"style="background-color:rgb(82, 164, 35) ">
            <div class="d-flex">
              <div class="wrapper">
                <h3 class="mb-0 font-weight-semibold text-white">11,553$</h3>
                <h5 class="mb-0 font-weight-medium text-primary">Profit</h5>
                <p class="mb-0 text-muted">+138.97(+0.54%)</p>
              </div>
              <div class="wrapper my-auto ml-auto ml-lg-4">
                <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('back-end.components.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp64\htdocs\laravel-online-shop-master\resources\views/back-end/dashboard.blade.php ENDPATH**/ ?>