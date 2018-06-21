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
                              <h2>Inserir</h2>
                              <div class="separator separator-danger">✻</div>
                              <p class="description">Insira uma nova sugestão de temas para TCC em nosso banco de dados.</p>
                              <?php if($errors->any()): ?>
                                  <div class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <ul>
                                          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <p><?php echo e($error); ?></p>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </ul>
                                  </div>
                              <?php endif; ?>
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
        <form class="form-horizontal" method="POST" action="<?php echo e(route('inserirTema')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('titulo') ? ' has-error' : ''); ?>">
                <label for="titulo" class="col-md-4 control-label">Título *</label>

                <div class="col-md-6">
                    <input id="titulo" type="text" placeholder="Digite o título!" class="form-control" name="titulo" value="<?php echo e(old('titulo')); ?>" required>

                    <?php if($errors->has('titulo')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('titulo')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('area') ? ' has-error' : ''); ?>">
                <label for="area" class="col-md-4 control-label">Área *</label>

                <div class="col-md-6">
                    <input id="area" type="text" placeholder="Área de atuação" class="form-control" name="area" value="<?php echo e(old('area')); ?>" required>

                    <?php if($errors->has('area')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('area')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('tipo') ? ' has-error' : ''); ?>">
                <label for="tipo" class="col-md-4 control-label">Interesse de participação </label>

                <div class="col-md-6">

                    <label class="radio-inline"><input type="radio" id="interesse" name="interesse" value="sim">Sim</label>
                    <label class="radio-inline"><input type="radio" id="interesse" name="interesse" value="nao">Não</label>
                    <span class="help-block"><h6>-Deseja ser orientador, orientando ou participar de alguma forma do projeto?.</h6></span>
                    <?php if($errors->has('tipo')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('tipo')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group<?php echo e($errors->has('tipo') ? ' has-error' : ''); ?>">
                <label for="tipo" class="col-md-4 control-label">Nível acadêmico </label>

                <div class="col-md-8">

                    <label class="radio-inline"><input type="radio" id="nivel" name="nivel" value="pesquisa">Pesquisa</label>
                    <label class="radio-inline"><input type="radio" id="nivel" name="nivel" value="graduação">Graduação</label>
                    <label class="radio-inline"><input type="radio" id="nivel" name="nivel" value="mestrado">Mestrado</label>
                    <label class="radio-inline"><input type="radio" id="nivel" name="nivel" value="doutorado">Doutorado</label>
                    <label class="radio-inline"><input type="radio" id="nivel" name="nivel" value="especialização">Especialização</label>
                    <?php if($errors->has('tipo')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('tipo')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
<br>
            <div class="form-group<?php echo e($errors->has('tempo') ? ' has-error' : ''); ?>">
                <label for="tempo" class="col-md-4 control-label">Tempo necessário </label>

                <div class="col-md-6">
                    <input id="tempo" type="text" placeholder="Tempo necessário para o densenvolvimento do projeto" class="form-control" name="tempo" value="<?php echo e(old('tempo')); ?>">

                    <?php if($errors->has('tempo')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('tempo')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('data_inicio') ? ' has-error' : ''); ?>">
                <label for="data_inicio" class="col-md-4 control-label">Data limite </label>

                <div class="col-md-6">
                    <input id="data_inicio" type="text" placeholder="Data limite para o início do trabalho" class="form-control" name="data_inicio" value="<?php echo e(old('data_inicio')); ?>">

                    <?php if($errors->has('data_inicio')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('data_inicio')); ?></strong>
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

            <div class="form-group<?php echo e($errors->has('corpo') ? ' has-error' : ''); ?>">
                <label for="corpo" class="col-md-4 control-label">Corpo *</label>

                <div class="col-md-6">
                    <textarea rows="20" id="corpo" type="text" placeholder="Descrição dos pontos que serão abordados no tema proposto" class="form-control" name="corpo" value="<?php echo e(old('corpo')); ?>" required></textarea>

                    <?php if($errors->has('corpo')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('corpo')); ?></strong>
                        </span>
                    <?php endif; ?>
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