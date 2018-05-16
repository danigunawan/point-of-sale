 <?php $__env->startSection('content-title', 'Laporan Kas'); ?> <?php $__env->startSection('breadcrumb'); ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item active">Laporan Kas</li>
</ol>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="header">
        <h4 class="title">Laporan Kas<span><span class="pull-right"></span></h4>
      </div>
      <div class="content table-responsive table-full-width">
        <div class="col-md-12">
          <form class="form-inline" action=<?php echo e(Auth::user()->hasRole('penjaga')?route('lihat_tanggalkas'):route('lihat_tanggalkaspm')); ?>>
            <div class="form-group">
              <label for="">Tanggal&nbsp;:&nbsp;</label>
              <input type="date" class="form-control input-sm" id="tanggalawal" name="tanggalawal" placeholder="Contoh: 20/01/2017">
            </div>
            <i class="fa fa-arrows-h fa-lg"></i>
            <div class="form-group">
              <input type="date" class="form-control input-sm" id="tanggalakhir" name="tanggalakhir" placeholder="Contoh: 20/01/2017">
            </div>&nbsp;
            <button type="submit" class="btn btn-success btn-fill btn-sm">Tampilkan</button>
          </form>          
        </div>

        <table class="table table-striped table-hover">
          <thead>
          <th>Nomor</th>
          <th>Tanggal</th>
          <th>Keterangan</th>
          <th>Ref</th>
          <th>Debit</th>          
          <th>Kredit</th>
          <th>Saldo</th>
        </thead>
        <!-- <tbody>
          <?php
            $i=1;
          ?>
          <?php $__currentLoopData = $kases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($i++); ?></td>
            <td><?php echo e(date("d F Y",strtotime($kas->tanggal))); ?></td>
            <td><?php echo e($kas->keterangan); ?></td>
            <td><?php echo e($kas->Ref); ?></td>
            <td>Rp. <?php echo e($kas->debit); ?></td>
            <td>Rp. <?php echo e($kas->kredit); ?></td>
            <td>Rp. <?php echo e($kas->saldo); ?></td>            
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody> -->
        </table>
        <center><?php echo e($kases->links()); ?></center>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
var today = new Date();
document.getElementById('tanggalawal').value =  today.toISOString().substr(0, 10);
document.getElementById('tanggalakhir').value =  today.toISOString().substr(0, 10);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>