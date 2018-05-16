 <?php $__env->startSection('content-title', 'Tambah Pembelian'); ?> <?php $__env->startSection('breadcrumb'); ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo e(route('datapembelian')); ?>">Data Transaksi Pembelian</a></li>
  <li class="breadcrumb-item active">Tambah Transaksi Pembelian</li>
</ol>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12">
  <div class="uk-alert uk-alert-success" data-uk-alert>
      <a href="" class="uk-alert-close uk-close"></a>
      <p><?php echo e(isset($successMessage) ? $successMessage : ''); ?></p>
       <?php if(count($errors) > 0): ?>
          <div class="alert alert-danger" align="center">
              <strong>Maaf !</strong> Sebaiknya Anda Harus :
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
      <?php endif; ?>
  </div>
    <div class="card">
      <div class="header">
        <h4 class="title">Tambah Transaksi Pembelian<span class="pull-right"><a href="<?php echo e(route('datapembelian')); ?>" class="btn btn-xs btn-fill btn-info">Data Pembelian &nbsp; <i class="fa fa-shopping-cart"></i></a></span></h4>
        <p class="category">Silahkan masukkan data pembelian dengan benar..</p>
      </div>
      <div class="content">       
       <form class="" action="<?php echo e(route('simpanpembelian')); ?>" method="post">
        <input type="hidden" name="tipe_pembayaran" value="Pembelian Tunai" >
        <input type="hidden" name="status" value="OK" >        
        <input type="hidden" id="harga_beli" name="harga_beli">           
        <input type="hidden" id="sub_total_harga" name="sub_total_harga"> 
        <input type="hidden" id="id_barang" name="id_barang">  

        <div class="col-md-12" style="text-align: left;"> 
            <div class="pull-left col-md-5" style="margin-left:-3%;" >
              <div class="col-md-11"> 
                <div class="form-group">
                    <label>Barcode *</label>
                    <!-- <input type="text" name="id_barang" id="id_barang" class="form-control" placeholder="Barcode / Nama atau Kode Barang" style="width: 100%;" required> -->
                    <select class="form-control" id="id_barang_search" name="id_barang_search" style="width: 100%;"></select>
              </div>                             
                <div class="btn-group-horizontal">                            
                <button type="submit" name="tambah_barang" id="tambah_barang" style="width: 90px; text-align: left;" class="btn btn-danger btn-fill">Tambah  <span class="fa fa-plus-square"></button> 
                
                <button type="submit" name="simpanpembelian" class="btn btn-primary btn-fill" onclick="return confirm('Apakah anda yakin untuk melakukan Pembayaran ?')">Simpan <span class="fa fa-shopping-cart"></span></button>                               
                
                </div>  
            </div>
            <div class="col-md-1">
              <label>Jumlah</label>
                <input type="number" name="jumlah_beli" id="jumlah_beli" class="form-control" placeholder="qty" style="width: 80px;">
            </div>
            </div>

            <div class="pull-right col-md-7" style="margin-right: -2%;">
              <div class="col-md-6"> 
                <!-- general left form elements  --> 
                 <div class="form-group">
                    <label>No. Pembelian</label>
                    <input type="text" id="kode_pembelian" name="kode_pembelian" value="<?php echo e($kodePembelian); ?>" readonly class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="form-group">
                    <label>Nama Supplier</label>
                    <select class="form-control" id="id_supplier" name="id_supplier" style="width: 100%;" value="" required>
                      <option value="" >Pilih Kategori Barang</option>
                      <?php $__currentLoopData = $list_supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($supplier->id); ?>" selected="selected"> <?php echo e($supplier->nama_supplier); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>                  
                <!-- general left form elements  -->
              </div>
              <div class="col-md-6"> 
                <!-- general right form elements -->
                  <div class="form-group">
                    <label>Pegawai</label>
                    <input type="text" name="createdby" id="createdby" class="form-control" value="<?php echo e($user->name); ?>" readonly >
                  </div>                                    
                  
                  <div class="form-group">
                    <label for="">Total Harga</label>
                    <input type="text" name="total_harga_beli" id="total_harga_beli" class="form-control" placeholder="" value="<?php echo e($total_harga_beli); ?>" readonly >
                  </div>                           
                <!-- general right form elements -->
              </div>              
            </div>
            <h4><strong><font><u>Tanggal Pembayaran Pembelian</u></font></strong><span class="pull-right">
              <input type="date" name="tanggal" class="form-control input-sm" id="tanggal" style="height: 33px">
            </span></h4> 
            <div class="row">
              <div class="col-md-6" >                            
                <div class="form-group">
                  <label><strong><font color="black">Jumlah Bayar</font></strong></label>
                  <input type="text" name="total_bayar" id="total_bayar" class="form-control" placeholder="Jumlah Uang Pembayaran" >
                </div>  
              </div>
              <div class="col-md-6" >                            
                <div class="form-group" style="text-align: left; font-color : black;">
                  <label><strong><font color="black">Kembalian</font></strong></label>
                  <input type="text" name="total_kembalian" id="total_kembalian" class="form-control" placeholder="0" readonly>
                </div>  
              </div>
              </div>            
            <div class="content table-responsive table-full-width" style="margin-left: -1%;">              
              <table class="table table-striped table-hover">
                <thead >
                <th style="text-align: center;" width="5%">Nomor</th>
                <th style="text-align: center;" width="30%">Nama</th>
                <th style="text-align: center;" width="15%">Harga Beli</th>
                <th style="text-align: center;" width="10%">Jumlah</th>
                <th style="text-align: center;" width="15%">Sub total</th>
                <th style="text-align: center;" width="25%">Aksi</th>
              </thead>
              <tbody> 
                <!-- isi nya blm ada detailPembelian -->   
              <?php $i=1; foreach ($detailPembelian as $detailBarang):  ?>
                <tr>
                  <td style="text-align: center;"><?php echo e($i); ?></td>
                  <td style="text-align: center;"><?php echo e($detailBarang->nama_barang); ?></td>
                  <td style="text-align: center;">Rp. <?php echo e($detailBarang->harga_beli); ?></td>
                  <td style="text-align: center;"><?php echo e($detailBarang->jumlah_beli); ?></td>
                  <td style="text-align: center;">Rp. <?php echo e($detailBarang->sub_total_harga); ?></td>
                  <td style="text-align: center;">                                
                      <div class="btn-group-horizontal">
                        <!-- <a href="<?php echo e(URL::to('penjaga/pembelian/tambah/'.$detailBarang->id.'/edit')); ?>" class="btn btn-fill btn-warning btn-xs">
                          <span class="glyphicon glyphicon-edit" ></span> Edit 
                      </a> -->                    
                      <a href="<?php echo e(URL::to('penjaga/pembelian/tambah/'.$detailBarang->id.'/hapus')); ?>" title="hapus"   onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo e(($i).' - '.($detailBarang->nama_barang)); ?>?')" class="btn btn-danger btn-fill btn-xs">
                          <span class="glyphicon glyphicon-trash"></span> Delete
                      </a>
                      </div>
                  </td>                              
                </tr>                
              <?php $i++; endforeach  ?>                            
              </tbody>
              </table>              
            </div>
          </div>                      
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
      $('#id_supplier').select2({
        placeholder: 'Pilih Supplier..',
        width: 'resolve',      
      });         
    });

    $('#id_barang_search').select2({
          placeholder: 'Barcode / Kode atau Nama barang..',
          minimumInputLength: 3,
          ajax: {
            url: '<?php echo e(route('searchbarang')); ?>',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
              return {
                results:  $.map(data, function (item) {
                      return {
                          text: item.nama_barang,
                          id:item.id+','+item.nama_barang+','+item.harga_beli                          
                      }
                  })
              };
            },
            cache: true
          }
        });

        $('#id_barang_search').change(function() {
          var harga_beli = this.value.split(",").pop();
          $('#harga_beli').val(harga_beli);
          var id_barang = this.value.split(",").shift();
          $('#id_barang').val(id_barang);
        });

    $(document).ready(function(){
        $("#jumlah_beli").keyup(function(){
            var jumlah_barang = document.getElementById('jumlah_beli').value;
            var harga_beli = document.getElementById('harga_beli').value;
            var subtotal = jumlah_barang * harga_beli;
            // document.getElementById('total_harga_beli').value = subtotal;
            $("#sub_total_harga").val(subtotal);
        });
    });
    $(document).ready(function(){
        $("#total_bayar").keyup(function(){
            var total_harga_beli = document.getElementById('total_harga_beli').value;
            var jumlah_uang = document.getElementById('total_bayar').value;
            var total_kembalian = jumlah_uang - total_harga_beli;
            document.getElementById('total_kembalian').value = total_kembalian;            
        });
    });
</script>
<script type="text/javascript">
var today = new Date();
document.getElementById('tanggal').value =  today.toISOString().substr(0, 10);
</script>
<!-- <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#btn_reload_code").click(function() {
            jQuery.ajax({
                url: '<?php echo e(route('generate_no_pembelian')); ?>',
                dataType: 'json',
                success: function(response){
                    jQuery("#kode_pembelian").val(response.return);
                },
                error: function(response){
                    console.log(response);
                }
            });
        });
    });
</script> -->
<!-- <script>
function activeBayar() {
    document.getElementById("btn_reload_code").disabled = true;
    document.getElementById("bayar").disabled = false;    
}
function activeTransaksi() {
    document.getElementById("bayar").disabled = true;
    document.getElementById("btn_reload_code").disabled = false;
}
</script> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>