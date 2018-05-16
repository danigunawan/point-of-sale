

<?php $__env->startSection('judul'); ?>
Laporan Persediaan
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
    <thead >
      <th style="text-align: center;">Nomor</th>
      <th style="text-align: center;">Tanggal</th>                            
      <th style="text-align: center;">Nama Supplier</th>    
      <th style="text-align: center;">Nama Barang</th>              
      <th style="text-align: center;">Harga Jual</th>
      <th style="text-align: center;">Stok Beli</th>
      <th style="text-align: center;">Stok Jual</th>
      <th style="text-align: center;">Jumlah Stok</th>
    </thead>
    <?php
      $i=1;
    ?>
    <?php $__currentLoopData = $persediaans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persediaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td style="text-align: center;"><?php echo e($i++); ?></td>
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->tanggal_beli)): ?>
            <?php echo e(date("d F Y",strtotime($persediaan->tanggal_beli))); ?>

            <?php else: ?>
              -
          <?php endif ?>
      </td>
      <td style="text-align: center;"><?php echo e($persediaan->nama_supplier); ?></td>
      <td><?php echo e($persediaan->nama_barang); ?></td>                                    
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->harga_jual)): ?>
            Rp. <?php echo e($persediaan->harga_jual); ?>

            <?php else: ?>
              Rp. 0
          <?php endif ?>           
      </td>
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->stok_beli)): ?>
            <?php echo e($persediaan->stok_beli); ?>

            <?php else: ?>
              0
          <?php endif ?>
      </td>
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->stok_jual)): ?>
            <?php echo e($persediaan->stok_jual); ?>

            <?php else: ?>
              0
          <?php endif ?>
      </td>
      <td style="text-align: center;">
          <?php if (!is_null($persediaan->stok)): ?>
            <?php echo e($persediaan->stok); ?>

            <?php else: ?>
              0
          <?php endif ?>
      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <table class="table table-bordered text-uppercase">
    <td>Total</td>
    <td width="20%" align="right"><?php echo e($total); ?> Barang</td>
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