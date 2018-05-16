<?php $__env->startSection('judul'); ?>
    Transaksi Penjualan
<div class="row">
    <div class="col-md-8">
        &nbsp;
    </div>
    <div class="col-md-2">
        <button type="button" onclick="printInvoice()" class="btn btn-fill btn-info pull-right hidden-print">Cetak</button> 
    </div>
    <div class="col-md-2">
        <a href="<?php echo e(url('penjaga/penjualan/tambah')); ?>" type="button" class="btn btn-fill btn-info pull-right hidden-print">Penjualan Baru</a>
    </div>
</div>    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('print'); ?>
  <table>
    <tr>
      <td style="height: 40px;">Nama Penjaga : <?php echo e(Auth::user()->name); ?></td>
    </tr>
    <br>
    <tr>
      <td style="height: 40px;">No.Penjualan : <?php echo e($penjualans->kode_penjualan); ?></td>
    </tr>
    <br>
    <tr>
      <td style="height: 40px;">Pelanggan : <?php echo e($penjualans->pelanggan); ?></td>
    </tr>
    <br>
    <tr>
      <td style="height: 40px;">Tanggal : <?php echo e(date("d F Y",strtotime($penjualans->tanggal))); ?></td>
    </tr>    
  </table>
  <br>
  <?php
    $i=1;
  ?>
  <table class="table table-bordered " width="100%">
    <thead>
      <td style="width: 5%; text-align: center;">Nomor</td>
      <td style="text-align: center;">Nama Barang</td>
      <td style="text-align: center;">Harga jual</td>
      <td style="text-align: center;">Diskon</td>
      <td style="text-align: center;">Harga jual Akhir</td>
      <td style="text-align: center;">Jumlah</td>
      <td style="text-align: center;">Sub Total</td>      
    </thead>
    <tbody>
      <?php $__currentLoopData = $detailPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($i++); ?></td>        
        <td><?php echo e($value->nama_barang); ?></td>
        <td>Rp. <?php echo e($value->harga_jual); ?></td>
        <td><?php echo e($value->diskon); ?> %</td>
        <td>Rp. <?php echo e($value->harga_jual_akhir); ?></td>
        <td><?php echo e($value->jumlah_jual); ?></td>
        <td>Rp. <?php echo e($value->sub_total_harga); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <table class="table table-bordered ">    
    <td width="33%">Total Harga : Rp. <?php echo e($penjualans->total_harga_jual); ?></td>    
    <td width="33%">Jumlah bayar : Rp. <?php echo e($penjualans->total_bayar); ?></td>    
    <td width="33%">Kembalian : Rp. <?php echo e($penjualans->total_kembalian); ?></td>    
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