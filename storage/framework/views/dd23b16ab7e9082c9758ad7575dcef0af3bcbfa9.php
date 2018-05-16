<div class="sidebar" data-color="<?php echo e(config('light-bootstrap-dashboard.sidebar-color', 'purple')); ?>" data-image="<?php echo e(mix( config('light-bootstrap-dashboard.sidebar-image', 'images/sidebar-5.jpg') )); ?>">
  <?php echo $__env->make('light-bootstrap-dashboard::layouts.sidebar.sidebar-wrapper.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
