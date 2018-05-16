<?php $__env->startSection('sidebar-menu'); ?>
  <ul class="nav">
    <?php if(auth()->check()): ?>

<?php if(Auth::user()->hasRole('penjaga')): ?>
<li class=
<?php if(Request::is('penjaga/barang') || Request::is('penjaga/barang/*')): ?>
'active'
<?php endif; ?>
>
  <a href="<?php echo e(route('databarang')); ?>">
    <i class="pe-7s-server"></i>
    <p>Data Barang</p>
  </a>
</li>
<?php endif; ?>

<?php if (app('laratrust')->hasRole('pemilik')) : ?>
<li class=
<?php if(Request::is('pemilik/supplier*') || Request::is('penjaga/supplier*')): ?>
'active'
<?php endif; ?>
>
  <a href="
    <?php echo e((Auth::user()->hasRole('penjaga')) ? route('datasupplier') : route('datasupplierpm')); ?>">
    <i class="pe-7s-users"></i>
    <p>Data Suplier</p>
  </a>
</li>
<li class=<?php if(Request::is('pemilik/penjaga*')): ?>
'active'
<?php endif; ?>
>
<a href=<?php echo e(route('datapenjaga')); ?>>
    <i class="pe-7s-user"></i>
    <p>Data Penjaga</p></a>
</li>
<?php endif; // app('laratrust')->hasRole ?>
<hr>
<?php if(Auth::user()->hasRole('penjaga')): ?>
<p>Transaksi</p>
<li class=
<?php if(Request::is('penjaga/penjualan') || Request::is('penjaga/penjualan/*')): ?>
'active'
<?php endif; ?>
>
  <a href="<?php echo e(route('tambahpenjualan')); ?>">
    <i class="pe-7s-way"></i>
    <p>Penjualan</p>
  </a>
</li>
<li class=
<?php if(Request::is('penjaga/pembelian') || Request::is('penjaga/pembelian/*')): ?>
'active'
<?php endif; ?>
>
  <a href="<?php echo e(route('tambahpembelian')); ?>">
    <i class="pe-7s-wallet"></i>
    <p>Pembelian</p>
  </a>
</li>
<hr>
<?php endif; ?>
<p>Laporan</p>
<li class=
<?php if(Request::is('pemilik/laporan/penjualan') || Request::is('pemilik/laporan/penjualan*') || Request::is('penjaga/laporan/penjualan') || Request::is('penjaga/laporan/penjualan*')): ?>
'active'
<?php endif; ?>>
    <a href=
    <?php echo e((Auth::user()->hasRole('penjaga')) ? route('laporanpenjualan') : route('laporanpenjualanpm')); ?>>
    <i class="pe-7s-ticket"></i>
    <p>Penjualan</p>
  </a>
</li>
<li class=
<?php if(Request::is('penjaga/laporan/persediaan') || Request::is('penjaga/laporan/persediaan*') || Request::is('pemilik/laporan/persediaan') || Request::is('pemilik/laporan/persediaan*')): ?>
'active'
<?php endif; ?>>
  <a href=
  <?php echo e((Auth::user()->hasRole('penjaga')) ? route('laporanpersediaan') : route('laporanpersediaanpm')); ?>>
    <i class="pe-7s-piggy"></i>
    <p>Persediaan</p>
  </a>
</li>
<li class=
<?php if(Request::is('penjaga/laporan/kas') || Request::is('penjaga/laporan/kas/*') || Request::is('pemilik/laporan/kas') || Request::is('pemilik/laporan/kas/*')): ?>
'active'
<?php endif; ?>>
  <a href=<?php echo e((Auth::user()->hasRole('penjaga')) ? route('datakas') : route('datakaspm')); ?>>
    <i class="pe-7s-cash"></i>
    <p>Penerimaan Kas</p>
  </a>
</li >
<hr>
<li class=
<?php if(Request::is('grafik') || Request::is('grafik/*')): ?>
'active'
<?php endif; ?>>
  <a href="<?php echo e(route('grafikpenjualan')); ?>">
    <i class="pe-7s-graph"></i>
    <p>Grafik Penjualan</p>
  </a>
</li>
<?php else: ?>
<li><a href="<?php echo e(route('login')); ?>">
  <i class="pe-7s-key"></i>
  <p>Login</p>
</a></li>
<?php endif; ?>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('light-bootstrap-dashboard::layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>