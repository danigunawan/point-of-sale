<?php if($model->title): ?>
title: "<?php echo $model->title; ?>",
<?php endif; ?>
<?php if($model->x_axis_title): ?>
hAxis: {title: "<?php echo e($model->x_axis_title); ?>"},
<?php endif; ?>
<?php if($model->y_axis_title): ?>
vAxis: {title: "<?php echo e($model->y_axis_title); ?>"},
<?php endif; ?>

