

<?php $__env->startSection('judul'); ?>
Nota Penjualan
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
  <table class="table table-bordered text-uppercase" width="100%">
    <thead>
      <td><h3>tanggal</h3></td>
      <td><h3>kode struk</h3></td>
      <td><h3>Nama Supplier</h3></td>
      <td><h3>Nama Barang</h3></td>
      <td><h3>Harga beli</h3></td>
      <td><h3>Diskon</h3></td>
      <td><h3>Jumlah</h3></td>
      <td><h3>TOTAL</h3></td>
    </thead>
    <tbody>
    <tr>
      <td><h3><?php echo e($penjualan->tanggal); ?></h3></td>
      <td><h3><?php echo e($penjualan->kode_penjualan); ?></h3></td>
      <td><h3><?php echo e($penjualan->nama_barang); ?></h3></td>
      <td><h3><?php echo e($penjualan->nama_penjaga); ?></h3></td>
      <td><h3><?php echo e($penjualan->harga_jual); ?></h3></td>
      <td><h3><?php echo e($penjualan->diskon); ?>%</h3></td>
      <td><h3><?php echo e($penjualan->jumlah); ?></h3></td>
      <td><h3><?php echo e($penjualan->total); ?></h3></td>
    </tr>
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

<?php echo $__env->make('vendor.nota', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>