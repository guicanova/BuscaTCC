<?php $__env->startSection('content'); ?>
<div class="section section-header">
    <div class="parallax filter">
      <div class="image"
          style="background-image: url('<?php echo e(asset('/img/error.jpeg')); ?>')">
      </div>
        <div class="container">
            <div class="content">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="title-area">
                          <h2>Erro 404!</h2>

                          <div class="separator separator-danger">✻</div>
                          
                          <h2><?php echo e($exception->getMessage()); ?></h2>
                          
                      </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>