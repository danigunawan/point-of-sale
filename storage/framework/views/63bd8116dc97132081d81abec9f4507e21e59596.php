<?php $__env->startSection('judul'); ?>
Nota Pembelian
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
      <th>Nomor</th>
      <th>Tanggal</th>
      <th>Nota</th>
      <th>Nama supplier</th>
      <th>nama barang</th>
      <th>harga beli</th>
      <th>jumlah</th>
      <th>total</th>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><?php echo e($pembelian->tanggal); ?></td>
        <td><?php echo e($pembelian->kode_struk); ?></td>
        <td><?php echo e($pembelian->nama_supplier); ?></td>
        <td><?php echo e($pembelian->nama_barang); ?></td>
        <td><?php echo e($pembelian->harga_beli); ?></td>
        <td><?php echo e($pembelian->jumlah); ?></td>
        <td><?php echo e($pembelian->total); ?></td>
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