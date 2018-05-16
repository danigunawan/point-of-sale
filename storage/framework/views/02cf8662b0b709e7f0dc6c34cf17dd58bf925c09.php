

<?php $__env->startSection('content-title', 'Laporan Penjualan'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Laporan Penjualan</li>
  </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Laporan Penjualan<span class="pull-right"><a target="_blank" href=<?php echo e(Auth::user()->hasRole('penjaga') ? route('cetaktlaporanpenjualan',['awal'=>$awal,'akhir'=>$akhir]) : route('cetaktlaporanpenjualanpm',['awal'=>$awal,'akhir'=>$akhir])); ?> class="btn btn-xs btn-fill btn-success"><i class="fa fa-print"></i>Cetak</a></span></h4>
            </div>
            <div class="content table-responsive table-full-width">
              <div class="col-md-12">
                <form class="form-inline" action=<?php echo e(Auth::user()->hasRole('penjaga') ? route('lihatlaporanpenjualan') : route('lihatlaporanpenjualanpm')); ?>>
                  <div class="form-group">
                    <label for="">Tanggal&nbsp;:&nbsp;</label>
                    <input type="date" class="form-control input-sm" id="tanggalawal" name="tanggalawal" value="<?php echo e($awal); ?>">
                  </div>
                  <i class="fa fa-arrows-h fa-lg"></i>
                  <div class="form-group">
                    <input type="date" class="form-control input-sm" id="tanggalakhir" name="tanggalakhir" value="<?php echo e($akhir); ?>">
                  </div>&nbsp;
                  <button type="submit" class="btn btn-success btn-fill btn-sm">Tampilkan</button>
                </form>
              </div>
                
                <table class="table table-striped table-hover">
                  <thead>
                    <th class="text-center">Nomor</th>
                    <th class="text-center">No. Penjualan</th>
                    <th class="text-center">Nama Penjaga</th>
                    <th class="text-center">Tanggal</th>
                    <!-- <th class="text-center">Pelanggan</th> -->
                    <th class="text-center">Total Harga Jual</th>
                    <th class="text-center">Jumlah bayar</th>
                    <th class="text-center">Kembalian</th> 
                  </thead>                                    
                  <tbody>
                  <?php
                    $i=1;
                  ?>
                  <?php $__currentLoopData = $laps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="text-center"><?php echo e($i++); ?></td>
                    <td class="text-center"><?php echo e($penjualan->kode_penjualan); ?></td>
                    <td class="text-center"><?php echo e($penjualan->createdby); ?></td>
                    <td class="text-center"><?php echo e($penjualan->tanggal); ?></td>
                    <!-- <td class="text-center"><?php echo e($penjualan->pelanggan); ?></td> -->
                    <td class="text-center">Rp. <?php echo e($penjualan->total_harga_jual); ?></td>
                    <td class="text-center">Rp. <?php echo e($penjualan->total_bayar); ?></td> 
                    <td class="text-center">Rp. <?php echo e($penjualan->total_kembalian); ?></td>      
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          <h4 class="title">Total</h4>
          <p class="category">Jumlah keseluruhan dari data diatas:</p>
        </div>
        <div class="content">
          <table>
            <tr>
              <td>Total Keseluruhan :&nbsp;</td>
              <td>Rp. <b><?php echo e(number_format($harga_total,0,',','.')); ?></b></td> 
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>