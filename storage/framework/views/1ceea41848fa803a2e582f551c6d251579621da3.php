

<?php $__env->startSection('judul'); ?>
Transaksi Penjualan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('print'); ?>
  <table>
    <tr>
      <td><h3>Nama Penjaga</h3></td>
      <td><h3>&nbsp;: <?php echo e(Auth::user()->name); ?></h3></td>
    </tr>
    <tr>
      <td><h3>Tanggal</h3></td>
      <td><h3 id="tanggal">&nbsp;: </h3></td>
    </tr>
  </table>
  <?php
    $i=1;
  ?>
  <table class="table table-bordered text-uppercase" width="100%">
    <thead>
      <th class="text-center">Nomor</th>
      <th class="text-center">No. Penjualan</th>
      <th class="text-center">Nama Penjaga</th>
      <th class="text-center">Tanggal</th>
      <th class="text-center">Pelanggan</th>
      <th class="text-center">Total Harga Jual</th>
      <th class="text-center">Jumlah bayar</th>
      <th class="text-center">Kembalian</th>      
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
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>  
  <br>
  <h3><span class="pull-right">Tanda Tangan Pemilik</span></h3>
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