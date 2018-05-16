<?php if($model->colors): ?>
colors:[
    <?php $__currentLoopData = $model->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    "<?php echo e($color); ?>",
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
],
<?php endif; ?>
<?php if($model->background_color): ?>
backgroundColor: "<?php echo e($model->background_color); ?>",
<?php endif; ?>
