

<?php $__env->startSection('content-title', 'Grafik Penjualan'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Grafik Penjualan</li>
  </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
                          <div class="card">
                              <div class="header">
                                  <h4 class="title">Grafik Penjualan</h4>
                              </div>
                              <div class="content">
                                  <form class="form-inline" action="<?php echo e(route('lihatgrafik')); ?>">
                                    <div class="form-group">
                                      <label for="">Tahun&nbsp;:&nbsp;</label>
                                      <input type="number" class="form-control input-sm" id="tahun" name="tahun" placeholder="Contoh: 2018">
                                    </div>&nbsp;
                                    <button type="submit" class="btn btn-success btn-fill btn-sm">Tampilkan</button>
                                  </form>

                                  
                              </div>

                          </div>
                          <?php echo $chart->html(); ?>

                      </div>
                    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php echo $chart->script(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>