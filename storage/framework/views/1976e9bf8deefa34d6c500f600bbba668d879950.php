<?php $__env->startSection('content-title', 'Data Barang'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Data Barang</li>
  </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Data Barang<span class="pull-right"><a href="<?php echo e(route('tambahbarang')); ?>" class="btn btn-xs btn-fill btn-info">Tambah Barang</a></span></h4>
            </div>
            <div class="content table-responsive table-full-width">                                  
              
              <table  class="table table-striped table-hover" id="dataTabelDataBarang">
                <thead>
                  <th class="text-center">Nomor</th>                  
                  <th class="text-center">Kode Barang</th>
                  <th class="text-center">Nama Barang</th>
                  <th class="text-center">Satuan</th>
                  <th class="text-center">Kategori</th>
                  <th class="text-center">Stok</th>                  
                  <th class="text-center">Harga Beli</th>
                  <th class="text-center">Harga Jual</th>                  
                  <th class="text-center">Diskon</th>
                  <th class="text-center">Harga</th>
                  <th class="text-center">Action</th>                         
                </thead>
                <tbody>
                  <?php
                    $i=1;
                  ?>
                  <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barangs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="text-center"><?php echo e($i++); ?></td>
                    <td class="text-center"><?php echo e($barangs->kode_barang); ?></td>                    
                    <td><?php echo e($barangs->nama_barang); ?></td>
                    <td class="text-center"><?php echo e($barangs->unit); ?></td>
                    <td class="text-center"><?php echo e($barangs->kategori); ?></td>
                    <td class="text-center"><?php echo e($barangs->stok); ?></td>
                    <td class="text-center">Rp.<?php echo e($barangs->harga_beli); ?></td>
                    <td class="text-center">Rp.<?php echo e($barangs->harga_jual); ?></td>
                    <td class="text-center"><?php echo e($barangs->diskon); ?>%</td>
                    <td class="text-center">Rp.<?php echo e($barangs->harga_jual_akhir); ?></td>
                    <td class="text-center"><a href="<?php echo e(route('ngubahbarang', $barangs->id)); ?>" class="btn btn-xs btn-success btn-fill"><i class="fa fa-edit"></i></a>
                      <?php echo e(Form::open(['url' => route('hapusbarang', $barangs->id), 'method' => 'delete', 'class' => 'form-inline'])); ?>

                        <?php echo Form::button('<i class="fa fa-trash"id="btnPopover1" title="Tekan tombol ini jika anda mau menghapus data" data-toggle="tooltip"></i>', ['type'=>'submit','class'=>'btn btn-xs btn-fill btn-danger']); ?>

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
  $(document).ready(function() {
    $('#btnPopover1').tooltip();  
  });
  </script>

<script>
      $(function () {

        $('#dataTabelDataBarang').DataTable({"pageLength": 5, "scrollX": true});

      });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>