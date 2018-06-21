<?php $__env->startSection('content'); ?>
<div class="section section-header">
    <div class="parallax filter">
      <div class="image"
          style="background-image: url('<?php echo e(asset('/img/register.jpeg')); ?>')">
      </div>
      <div class="container">
          <div class="content">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="row">
                          <div class="title-area">
                              <h2>Cadastrar</h2>
                              <div class="separator separator-danger">✻</div>
                              <p class="description">Realize o cadastro para ter acesso a nossa base de temas para TCC.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <label for="name" class="col-md-4 control-label">Nome *</label>

                <div class="col-md-6">
                    <input id="name" type="text" placeholder="Digite seu nome!" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required>

                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="email" class="col-md-4 control-label">Email *</label>

                <div class="col-md-6">
                    <input id="email" type="email" placeholder="Digite seu email!" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('tipo') ? ' has-error' : ''); ?>">
                <label for="tipo" class="col-md-4 control-label">Tipo de Usuário *</label>

                <div class="col-md-6">

                    <label class="radio-inline"><input type="radio" id="tipo" name="tipo" value="professor">Professor</label>
                    <label class="radio-inline"><input type="radio" id="tipo" name="tipo" value="aluno">Aluno</label>
                    <label class="radio-inline"><input type="radio" id="tipo" name="tipo" value="outros" checked="checked">Outros</label>
                    <?php if($errors->has('tipo')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('tipo')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('instituicao') ? ' has-error' : ''); ?>">
                <label for="instituicao" class="col-md-4 control-label">Instituição  </label>

                <div class="col-md-6">
                    <input id="instituicao" type="text" class="form-control" name="instituicao" value="<?php echo e(old('instituicao')); ?>">

                    <?php if($errors->has('instituicao')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('instituicao')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password" class="col-md-4 control-label">Senha *</label>

                <div class="col-md-6">
                    <input id="password" type="password" placeholder="Escolha sua senha!" class="form-control" name="password" required>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirme sua senha *</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" placeholder="Digite sua senha novamente!" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>