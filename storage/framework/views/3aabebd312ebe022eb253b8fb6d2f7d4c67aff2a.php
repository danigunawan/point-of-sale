 <?php $__env->startSection('content-title', 'Edit Kategori Barang'); ?> <?php $__env->startSection('breadcrumb'); ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo e(route('databarang_kategori')); ?>">Data Kategori Barang</a></li>
  <li class="breadcrumb-item active">Edit Kategori Barang</li>
</ol>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="header">
        <h4 class="title">Edit Kategori Barang<span class="pull-right"><a href="<?php echo e(URL::previous()); ?>" class="btn btn-xs btn-fill btn-info">Kembali</a></span></h4>
        <p class="category">Silahkan masukkan data kategori barang dengan benar..</p>
      </div>
      <div class="content">
        <form class="form-horizontal" action="<?php echo e(route('ubahbarang_kategori',$barang_kategori->idbarang_kategori)); ?>" method="post">

          <div class="row">
            <div class="col-md-12" style="margin-left:25%;">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kategori Barang</label>
                  <input type="text" name="kategori" class="form-control" placeholder="Kategori Barang.." required value="<?php echo e($barang_kategori->kategori); ?>">
                </div>
              </div>            
            </div>
          </div>

          <button type="submit" class="btn btn-info btn-fill pull-right">Update Barang</button>
          <div class="clearfix"></div>
          <?php echo e(csrf_field()); ?>

        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>