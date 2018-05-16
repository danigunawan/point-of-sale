<?php $__env->startSection('content-title'); ?>
<span class="text-warning">404 Not Found</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="header">
        <h4 class="title">Oops! <?php echo e(class_basename($exception->getPrevious() ? : $exception)); ?></h4>
      </div>
      <?php if($exception->getMessage()): ?>
      <div class="content">
        <?php echo e($exception->getPrevious() ? $exception->getPrevious()->getMessage() : $exception->getMessage()); ?>

      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>