<?php $__env->startSection('content'); ?>
<div class="row" >
  <div class="col-md-8 col-md-offset-2" >
    <div class="auth-card card">      
      <div class="header">
        <img src="<?php echo e(URL::to('images/logo-toko-aisyah.png')); ?>" height="110px" width="720px" id="logo-toko-aisyah">
        <hr>
        <h4 class="title text-center">Login</h4>        
      </div>      
      <div class="content">
        <form action="<?php echo e(route('login')); ?>" method="POST">
          <?php echo e(csrf_field()); ?>

            <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
              <label for="username">Username</label>
              <input name="username" type="username" class="form-control" required>
              <?php if($errors->has('username')): ?>
              <span class="help-block"><?php echo e($errors->first('username')); ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
              <label for="password">Password</label>
              <input name="password" type="password" class="form-control" required>
              <?php if($errors->has('password')): ?>
              <span class="help-block"><?php echo e($errors->first('password')); ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <div>
                <label class="checkbox">
                  <input type="checkbox" data-toggle="checkbox"> Remember
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-fill btn-lg btn-success btn-block">Login</button>
            
            
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('light-bootstrap-dashboard::layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>