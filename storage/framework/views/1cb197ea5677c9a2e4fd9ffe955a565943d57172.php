<div class="main-panel">
  <nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><?php echo $__env->yieldContent('content-title', 'Title'); ?></a>
      </div>
      <div class="collapse navbar-collapse">
        

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
                Account
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <?php if(auth()->check()): ?>
                <li>
                  <a href="#">Hallo, <?php echo e(Auth::user()->name); ?></a>
                </li>
                <li>
                  <form id="logout-form" action="<?php echo e(url('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                  </form>
                  <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Logout
                    <i class="fa fa-sign-out"></i>
                  </a>
                </li>
                <?php elseif(!isset($exception)): ?>
                <li>
                  <a href="<?php echo e(route('login')); ?>">
                    <i class="fa fa-sign-in"></i>
                    Login
                  </a>
                </li>
                <?php endif; ?>
              </ul>
          </li>
          <li class="separator hidden-lg hidden-md"></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="card">
    <div class="card-body">
      <?php echo $__env->yieldContent('breadcrumb'); ?>
    </div>
  </div>

  <div class="content">

    <?php echo $__env->yieldContent('content'); ?>

  </div>

  <?php echo $__env->make('light-bootstrap-dashboard::layouts.main-panel.footer.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
