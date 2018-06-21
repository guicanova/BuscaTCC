<?php $__env->startSection('content'); ?>
<div class="section section-header">
    <div class="parallax filter">
      <div class="image"
          style="background-image: url('<?php echo e(asset('/img/login.jpeg')); ?>')">
      </div>
        <div class="container">
            <div class="content">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="title-area">
                          <h2>Entrar</h2>

                          <div class="separator separator-danger">✻</div>
                      </div>
                      <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                          <?php echo e(csrf_field()); ?>



                              <label for="email" class="col-md-4 control-label">Email</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" placeholder="nome@exemplo.com" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                  <?php if($errors->has('email')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('email')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>

                              <label for="password" class="col-md-4 control-label">Senha</label>

                              <div class="col-md-6">
                                  <input id="password" placeholder="Digite sua senha!" type="password" class="form-control" name="password" required>

                                  <?php if($errors->has('password')): ?>
                                      <span class="help-block">
                                          <strong><?php echo e($errors->first('password')); ?></strong>
                                      </span>
                                  <?php endif; ?>
                              </div>

                              <div class="col-md-6 col-md-offset-2">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Lembrar
                                      </label>
                                  </div>
                              </div>

                              <div class="col-md-8 col-md-offset-2">
                                  <button type="submit" class="btn btn-default btn-fill">
                                      Entrar
                                  </button>

                                  <a class="btn default btn-fill" href="<?php echo e(route('password.request')); ?>">
                                      Esqueceu sua senha?
                                  </a>
                              </div>

                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>