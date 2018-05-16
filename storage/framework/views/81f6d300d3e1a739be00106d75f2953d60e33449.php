

<?php $__env->startSection('judul'); ?>
Laporan Penjualan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('print'); ?>
  <table>
    <tr>
      <td><h3>Nama Penjaga</h3></td>
      <td><h3>&nbsp;: <?php echo e(Auth::user()->name); ?></h3></td>
    </tr>
    <tr>
      <td><h3>Periode</h3></td>
      <td><h3>&nbsp;: <?php echo e(date("d F Y",strtotime($awal))); ?> <strong>Sampai</strong> <?php echo e(date("d F Y",strtotime($akhir))); ?> </h3></td>
    </tr>
  </table>
  <?php
    $i=1;
  ?>
  <table class="table table-bordered" width="100%">
    <thead>
      <th class="text-center">Nomor</th>
      <th class="text-center">Tanggal</th>
      <th class="text-center">No. Penjualan</th> 
      <th class="text-center">Nama Penjaga</th>           
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
      <td class="text-center"><?php echo e($penjualan->tanggal); ?></td>
      <td class="text-center"><?php echo e($penjualan->kode_penjualan); ?></td> 
      <td class="text-center"><?php echo e($penjualan->createdby); ?></td>           
      <td class="text-center">Rp. <?php echo e($penjualan->total_harga_jual); ?></td>
      <td class="text-center">Rp. <?php echo e($penjualan->total_bayar); ?></td> 
      <td class="text-center">Rp. <?php echo e($penjualan->total_kembalian); ?></td>      
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
  </table>
  <table class="table table-bordered">
    <td>Total</td>
    <td width="20%" style="text-align: right;">Rp.&nbsp; <?php echo e(number_format($harga_total,0,',','.')); ?></td>
  </table>
  <br>
  <h3><span class="pull-right">Disetujui Oleh</span></h3>
  <h3><span class="pull-left">Diterima Oleh</span></h3>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vendor.cetak', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>