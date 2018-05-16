<?php $__env->startSection('judul'); ?>
    Transaksi Pembelian
<div class="row">
    <div class="col-md-8">
        &nbsp;
    </div>
    <div class="col-md-2">
        <button type="button" onclick="printInvoice()" class="btn btn-fill btn-info pull-right hidden-print">Cetak</button> 
    </div>
    <div class="col-md-2">
        <a href="<?php echo e(url('penjaga/pembelian/tambah')); ?>" type="button" class="btn btn-fill btn-info pull-right hidden-print">Pembelian Baru</a>
    </div>
</div>    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('print'); ?>
  <table>
    <tr>
      <td><h3>Nama Penjaga</h3></td>
      <td><h3>&nbsp;: <?php echo e(Auth::user()->name); ?></h3></td>
    </tr>
    <tr>
      <td><h3>No.Pembelian</h3></td>
      <td><h3>&nbsp;: <?php echo e($pembelians->kode_pembelian); ?></h3></td>
    </tr>
    <tr>
      <td><h3>Supplier</h3></td>
      <td><h3>&nbsp;: <?php echo e($nama_supplier); ?></h3></td>
    </tr>
    <tr>
      <td><h3>Tanggal</h3></td>
      <td><h3 id="tanggal">&nbsp;: <?php echo e($pembelians->tanggal); ?></h3></td>
    </tr>
  </table>
  <?php
    $i=1;
  ?>
  <table class="table table-bordered " width="100%">
    <thead>
      <td style="width: 5%; text-align: center;">Nomor</td>
      <td style="text-align: center;">Nama Barang</td>
      <td style="text-align: center;">Harga Beli</td>
      <td style="text-align: center;">Jumlah</td>
      <td style="text-align: center;">Sub Total</td>      
    </thead>
    <tbody>
      <?php $__currentLoopData = $detailPembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td style="text-align: center;"><?php echo e($i++); ?></td>        
        <td><?php echo e($value->nama_barang); ?></td>
        <td style="text-align: center;">Rp. <?php echo e($value->harga_beli); ?></td>
        <td style="text-align: center;"><?php echo e($value->jumlah_beli); ?></td>
        <td style="text-align: center;">Rp. <?php echo e($value->sub_total_harga); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <table class="table table-bordered ">    
    <td width="33%">Total Harga : Rp. <?php echo e($pembelians->total_harga_beli); ?></td>
    <td width="33%">Jumlah bayar : Rp. <?php echo e($pembelians->total_bayar); ?></td>
    <td width="33%">Kembalian : Rp. <?php echo e($pembelians->total_kembalian); ?></td>    
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
<!-- <hr class="hidden-print"/> -->
<?php $__env->stopSection(); ?>

<script>
function printInvoice() {
    window.print();
}
</script>
<?php echo $__env->make('vendor.cetak', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>