 <?php $__env->startSection('content-title', 'Edit Barang'); ?> <?php $__env->startSection('breadcrumb'); ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo e(route('databarang')); ?>">Data Barang</a></li>
  <li class="breadcrumb-item active">Edit Barang</li>
</ol>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="header">
        <h4 class="title">Edit Barang<span class="pull-right"><a href="<?php echo e(URL::previous()); ?>" class="btn btn-xs btn-fill btn-info">Kembali</a></span></h4>
        <p class="category">Silahkan masukkan data barang dengan benar..</p>
      </div>
      <div class="content">
        <form class="" action="<?php echo e(route('ubahbarang',$barang->id)); ?>" method="post">

  <div class="row">
            <div class="col-md-3"> 
            <div class="form-group">              
              <label>Kode Barang/Barcode *</label>                           
              <input class="form-control" type="text" name="kode_barang" id="kode_barang" placeholder="Kode Barang" maxlength="20" required value="<?php echo e($barang->kode_barang); ?>" readonly>              
            </div>
            </div>

            <div class="col-md-1">
              <div class="form-group">
                <label ><font color="white">Refresh_k</font></label>
                <button class="btn btn-default" type="button" id="btn_reload_code"><span id="btnPopover1" title="Tidak Aktif" data-toggle="tooltip" class="glyphicon glyphicon-refresh" disabled></span></button>
              </div>
            </div>

            <!-- </div> -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" required value="<?php echo e($barang->nama_barang); ?>">
              </div>
            </div>  

            <div class="col-md-2">
              <div class="form-group">
                <label>Harga Beli (Rp)</label>
                <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="Contoh: 10000" required value="<?php echo e($barang->harga_beli); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Harga Jual (Rp)</label>
                <input type="number" class="form-control" id="harga_jual"  name="harga_jual" placeholder="Contoh: 10000" required value="<?php echo e($barang->harga_jual); ?>">
              </div>
            </div>           
          </div>

          <div class="row">                       
            <div class="col-md-4">
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" type="text" id="idbarang_kategori" name="idbarang_kategori" style="width:100%;height: 40px;" >
                  <option value="<?php echo e($barang->idbarang_kategori); ?>" >-- <?php echo e($kategori); ?> --</option>
                  <?php $__currentLoopData = $barang_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($kategori->idbarang_kategori); ?>" > <?php echo e($kategori->kategori); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Satuan</label>
                <select class="form-control" type="text" id="idbarang_unit" name="idbarang_unit" style="width:100%;height: 40px;" >
                  <option value="<?php echo e($barang->idbarang_unit); ?>">-- <?php echo e($satuan); ?> --</option>
                  <?php $__currentLoopData = $barang_unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $satuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($satuan->idbarang_unit); ?>"> <?php echo e($satuan->unit); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Diskon (%)</label>
                <input type="number" id="diskon" name="diskon" class="form-control" required  value="<?php echo e($barang->diskon); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Harga (Rp)</label>
                <input type="number" id="harga_jual_akhir" name="harga_jual_akhir" class="form-control" required readonly value="<?php echo e($barang->harga_jual_akhir); ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" readonly value="<?php echo e($barang->stok); ?>">
              </div>
            </div>            
          </div>          

          <button type="submit" class="btn btn-info btn-fill pull-right">Update Barang</button>
          <div class="clearfix"></div>
          <?php echo e(csrf_field()); ?>

        </form>
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
<script type="text/javascript">
  $(document).ready(function(){
          $("#diskon").keyup(function(){ 
              var diskon_barang = document.getElementById('diskon').value;
              var harga_jual = document.getElementById('harga_jual').value;              
              var diskon = (harga_jual/100)*diskon_barang;
              var harga_jual_akhir = harga_jual - diskon;
              document.getElementById('harga_jual_akhir').value = harga_jual_akhir;
           });
          $("#harga_jual").keyup(function(){              
              var diskon_barang = document.getElementById('diskon').value;
              var harga_jual = document.getElementById('harga_jual').value;              
              var diskon = (harga_jual/100)*diskon_barang;
              var harga_jual_akhir = harga_jual - diskon;
              document.getElementById('harga_jual_akhir').value = harga_jual_akhir;
          });
      });
</script>
<script type="text/javascript">      
  $(document).ready(function() {
    $('#idbarang_unit').select2({
      placeholder: 'Pilih Satuan..',
      width: 'resolve',      
    });
    $('#idbarang_kategori').select2({
      placeholder: 'Pilih Kategori..',
      width: 'resolve',
    });
  });
</script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>