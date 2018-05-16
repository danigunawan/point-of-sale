<?php $__env->startSection('content-title', 'Data Transaksi Pembelian'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Data Transaksi Pembelian</li>
  </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="header">
              <h4 class="title">Pembelian<span class="pull-right">&nbsp;<a href="<?php echo e(route('tambahpembelian')); ?>" class="btn btn-xs btn-fill btn-info">Tambah Transaksi Pembelian</a></span><span class="pull-right"><a href="" class="btn btn-xs btn-fill btn-success"><i class="fa fa-print"></i>Cetak</a></span></h4>
          </div>
          <div class="content table-responsive table-full-width">
            <div class="col-md-12">                                   
            </div>
              
              <table id="tablePembelian" class="table table-striped table-hover">
                <thead>
                  <th>Nomor</th>
                  <th>Kode Pembelian</th>
                  <th>Tanggal</th>
                  <th>Nama Supplier</th>                                      
                  <th>Total Harga</th>
                  <th>Jumlah Bayar</th>
                  <th>Kembalian</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $i=1;
                  ?>
                  <?php $__currentLoopData = $pembelians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pembelian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($pembelian->kode_pembelian); ?></td>
                    <td><?php echo e($pembelian->tanggal); ?></td>
                    <td><?php echo e($pembelian->nama_supplier); ?></td>                                        
                    <td><?php echo e($pembelian->total_harga_beli); ?></td>
                    <td><?php echo e($pembelian->total_bayar); ?></td>
                    <td><?php echo e($pembelian->total_kembalian); ?></td>
                    <td class="text-center"><a target="_blank" href="<?php echo e(route('nota_pembelian',$pembelian->id)); ?>" class="btn btn-xs btn-info btn-fill"><i class="fa fa-print"></i></a>
                      <?php echo e(Form::open(['url' => route('hapuspembelian', $pembelian->id), 'method' => 'delete', 'class' => 'form-inline'])); ?>

                        <?php echo Form::button('<i class="fa fa-trash"></i>', ['type'=>'submit','class'=>'btn btn-xs btn-fill btn-danger']); ?>

                      <?php echo e(Form::close()); ?>

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
</script>
</script>
<!-- <script src="<?php echo e(URL::asset('admin/plugins/datatables/jquery.dataTables.min.js')); ?>"></script> -->
<!-- <script src="<?php echo e(URL::asset('admin/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script> -->
<script>
  $(function () {

    $('#tablePembelian').DataTable({"pageLength": 10, }); //"scrollX": true

  });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>