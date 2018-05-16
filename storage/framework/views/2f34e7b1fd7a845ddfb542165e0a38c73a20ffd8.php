 <?php $__env->startSection('content-title', 'Data Transaksi Penjualan'); ?> <?php $__env->startSection('breadcrumb'); ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item active">Data Transaksi Penjualan</li>
</ol>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="header">
        <h4 class="title">Penjualan<span class="pull-right">&nbsp;<a href="<?php echo e(route('tambahpenjualan')); ?>" class="btn btn-xs btn-fill btn-info">Tambah Transaksi Penjualan</a></span><span class="pull-right"><a href="<?php echo e(route('cetakpenjualan',$tanggal)); ?>" target="_blank" class="btn btn-xs btn-fill btn-success"><i class="fa fa-print"></i>Cetak</a></span></h4>
      </div>
      <div class="content table-responsive table-full-width">
        <div class="col-md-12">
          <form class="form-inline" action="<?php echo e(route('lihat_tanggalpenjualan')); ?>">
            <div class="form-group">
              <label for="">Tanggal&nbsp;:&nbsp;</label>
              <input type="date" name="tanggal" class="form-control input-sm" id="tanggal" placeholder="Contoh: 20/01/2017">
            </div>&nbsp;
            <button type="submit" class="btn btn-warning btn-fill btn-sm">Tampilkan</button>
          </form>
        </div>
        
        <table  class="table table-striped table-hover">
          <thead>
            <th class="text-center">Nomor</th>
            <th class="text-center">No. Penjualan</th>
            <th class="text-center">Nama Penjaga</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Pelanggan</th>
            <th class="text-center">Total Harga Jual</th>
            <th class="text-center">Jumlah bayar</th>
            <th class="text-center">Kembalian</th>
            <th class="text-center">Tools</th>
          </thead>
          <tbody>
            <?php
              $i=1;
            ?>
            <?php $__currentLoopData = $penjualans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="text-center"><?php echo e($i++); ?></td>
              <td class="text-center"><?php echo e($penjualan->kode_penjualan); ?></td>
              <td class="text-center"><?php echo e($penjualan->createdby); ?></td>
              <td class="text-center"><?php echo e($penjualan->tanggal); ?></td>
              <td class="text-center"><?php echo e($penjualan->pelanggan); ?></td>
              <td class="text-center">Rp. <?php echo e($penjualan->total_harga_jual); ?></td>
              <td class="text-center">Rp. <?php echo e($penjualan->total_bayar); ?></td>
              <td class="text-center">Rp. <?php echo e($penjualan->total_kembalian); ?></td>
              <td class="text-center"><a target="_blank" href="<?php echo e(route('nota_penjualan',$penjualan->id)); ?>" class="btn btn-xs btn-info btn-fill"><i class="fa fa-print"></i></a>                
                </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
var today = new Date();
document.getElementById('tanggal').value =  today.toISOString().substr(0, 10);
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>