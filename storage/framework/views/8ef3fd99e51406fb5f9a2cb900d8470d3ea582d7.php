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
                              <h2>Buscar</h2>
                              <div class="separator separator-danger">✻</div>
                              <p class="description">Encontre sugestões de temas para TCC em nosso banco de dados.</p>
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
      <div class="row">
        <?php
          $numeroColunas = 2;
          $colunas = 0;
        ?>

      <?php $__currentLoopData = $temas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
          $colunas++;
        ?>
        <div id="tema_<?php echo e($tema->id); ?>" class="card text-center col-md-<?php echo e(12 / $numeroColunas - 1); ?>">
          <div class="card-header">
            <br>
            <p class="card-text"><a href="#buscaPorArea" class="badge badge-pill"><?php echo e($tema->area); ?></a> <a href="#buscaPorNivel" class="text-uppercase badge badge-pill badge-info"><?php echo e($tema->nivel); ?></a></p>
          </div>
          <div class="card-body">
            <br>
            <h2 class="card-title"><?php echo e($tema->titulo); ?></h2>
            <p class="card-text"><?php echo e($tema->instituicao); ?></p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo e($tema->id); ?>" aria-expanded="false" aria-controls="<?php echo e($tema->titulo); ?>" onclick=$(this).hide()>
              Mais
            </button>
            <br>
            <div class="collapse" id="<?php echo e($tema->id); ?>">
              <br>
              <?php if($tema->user->interesse == 'sim'): ?>
              <p class="card-text"><b><?php echo e($tema->user->tipo); ?>:</b> <?php echo e($tema->user->name); ?> (<?php echo e($tema->user->instituicao); ?>)</p>
              <?php endif; ?>
              <p class="card-text text-justify"><b>Descrição:</b> <?php echo e($tema->corpo); ?></p>
              <p class="card-text"><b>Tempo para o desenvolvimento:</b> <?php echo e($tema->tempo); ?></p>
              <p class="card-text"><b>Data máxima para o início:</b> <?php echo e($tema->data_inicio); ?></p>
            </div>
            <br>
          </div>
        </div>
        <div class="col-md-1"></div>
        <?php if($colunas == 2): ?>
      </div>
      <div class="row">
        <?php
          $colunas = 0;
        ?>
        <?php endif; ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>