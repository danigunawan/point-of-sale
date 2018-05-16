<!DOCTYPE html>
<html lang="<?php echo $__env->yieldContent('lang', config('app.locale', 'en')); ?>">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<title>Toko Aisyah</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link href="<?php echo e(asset('/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">

  <!-- Styles -->
  <?php $__env->startSection('styles'); ?>
  <link href="<?php echo e(mix('/css/light-bootstrap-dashboard.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(mix('/css/auth.css')); ?>" rel="stylesheet">
  <?php echo $__env->yieldSection(); ?>
  <?php echo $__env->yieldPushContent('head'); ?>
</head>
<body background="/images/bg-toko-aisyah.png">
  <div id="app" class="container">
		<?php echo $__env->yieldContent('content'); ?>
	</div>

	<?php $__env->startSection('scripts'); ?>
	<script src="<?php echo e(asset('/js/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/jquery.dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/dataTables.bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(mix('/js/manifest.js')); ?>" charset="utf-8"></script>
	<script src="<?php echo e(mix('/js/vendor.js')); ?>" charset="utf-8"></script>
	<script src="<?php echo e(mix('/js/auth.js')); ?>" charset="utf-8"></script>
	<script src="<?php echo e(asset('/js/bootstrap-notify.min.js')); ?>"></script>
	<?php echo $__env->yieldSection(); ?>
	<?php echo $__env->yieldPushContent('body'); ?>
</body>
</html>
