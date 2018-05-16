

<?php $__env->startSection('content-title', 'Laporan Persediaan'); ?>

<?php $__env->startSection('breadcrumb'); ?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Laporan Persediaan</li>
  </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="header"> 
              <h4 class="title">Laporan Persediaan<span class="pull-right"><a target="_blank" href=<?php echo e(Auth::user()->hasRole('penjaga') ? route('cetakpersediaan',['awal'=>$awal,'akhir'=>$akhir]) : route('cetakpersediaanpm',['awal'=>$awal,'akhir'=>$akhir])); ?> class="btn btn-xs btn-fill btn-success"><i class="fa fa-print"></i>Cetak</a></span></h4>
          </div>
          <div class="content table-responsive table-full-width">            
            <div class="col-md-12">                                                                    

              <form class="form-inline" action="<?php echo e(Auth::user()->hasRole('penjaga') ? route('lihatlaporanpersediaan') : route('lihatlaporanpersediaanpm')); ?>">
                <div class="form-group">
                  <label for="">Tanggal&nbsp;:&nbsp;</label>
                  <input type="date" class="form-control input-sm" id="tanggalawal" name="tanggalawal" value="<?php echo e($awal); ?>">
                </div>
                <i class="fa fa-arrows-h fa-lg"></i>
                <div class="form-group">
                  <input type="date" class="form-control input-sm" id="tanggalakhir" name="tanggalakhir" value="<?php echo e($akhir); ?>">
                </div>&nbsp;
                <button type="submit" class="btn btn-success btn-fill btn-sm">Tampilkan</button>
              </form>

            </div>
              
              <table class="table table-striped table-hover">
                <thead>
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
          </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          <h4 class="title">Total</h4>
          <p class="category">Jumlah keseluruhan barang dari data diatas:</p>
        </div>
        <div class="content">
          <table>
            <tr>
              <td>Total Barang :&nbsp;</td>
              <td><b><?php echo e($total); ?></b></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>