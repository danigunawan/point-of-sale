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
	<link rel="stylesheet" href="<?php echo e(asset('/css/select2.min.css')); ?>">
	<?php echo Charts::styles(); ?>

  <?php echo $__env->yieldSection(); ?>
  <?php echo $__env->yieldPushContent('head'); ?>
</head>
<body>
	<div id="app" class="wrapper">
		<?php echo $__env->make('light-bootstrap-dashboard::layouts.sidebar.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo $__env->make('light-bootstrap-dashboard::layouts.main-panel.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>

	<?php $__env->startSection('scripts'); ?>
	<script src="<?php echo e(asset('/js/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(mix('/js/manifest.js')); ?>" charset="utf-8"></script>
	<script src="<?php echo e(mix('/js/vendor.js')); ?>" charset="utf-8"></script>
	<?php echo Charts::scripts(); ?>

	<script src="<?php echo e(mix('/js/light-bootstrap-dashboard.js')); ?>" charset="utf-8"></script>
	<script src="<?php echo e(asset('/js/jquery.dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/dataTables.bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/bootstrap-notify.min.js')); ?>"></script>
	<script src="<?php echo e(asset('/js/select2.full.min.js')); ?>"></script>

	<?php echo $__env->yieldSection(); ?>
	<?php echo $__env->yieldPushContent('body'); ?>

	<?php echo $__env->yieldContent('script'); ?>
	<?php echo $__env->make('notify._notif', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
