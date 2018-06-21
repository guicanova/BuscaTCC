<?php $__env->startSection('content'); ?>

    <div class="section section-header">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo e(asset('/img/maquina_papeis.jpeg')); ?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p>Contato</p>
                        <h1 class="title-modern"><?php echo e(config('app.name', 'Laravel')); ?></h1>
                        <div class="separator line-separator">♦</div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="section" id="mensagem">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Enviar Mensagem</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Este é nosso canal de comunicação! Ficaremos contentes em receber sua mensagem e prometemos responder assim que possível!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <form class="form-horizontal" method="POST" action="<?php echo e(route('enviarMensagem')); ?>" enctype="multipart/form-data">
                      <?php echo e(csrf_field()); ?>

                      <?php if(session('status')): ?>
                          <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <?php echo e(session('status')); ?>

                          </div>
                      <?php endif; ?>
                      <?php if($errors->any()): ?>
                          <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <ul>
                                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <p>  <?php echo e($error); ?></p>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul>
                          </div>
                      <?php endif; ?>

                      <div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
                          <label for="nome" class="col-md-4 control-label">Nome</label>

                          <div class="col-md-6">
                              <input id="nome" type="text" placeholder="Digite seu nome!" class="form-control" name="nome" value="<?php echo e(old('nome')); ?>" required>

                              <?php if($errors->has('nome')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('nome')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>

                      <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                          <label for="email" class="col-md-4 control-label">Email</label>

                          <div class="col-md-6">
                              <input id="email" type="email" placeholder="Digite seu email!" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                              <?php if($errors->has('email')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('email')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>

                      <div class="form-group<?php echo e($errors->has('mensagem') ? ' has-error' : ''); ?>">
                          <label for="mensagem" class="col-md-4 control-label">Mensagem</label>

                          <div class="col-md-6">
                              <input id="mensagem" type="text" placeholder="Digite sua mensagem!" class="form-control" name="mensagem" value="<?php echo e(old('mensagem')); ?>" required>

                              <?php if($errors->has('mensagem')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('mensagem')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Enviar
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-our-team-freebie">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('<?php echo e(asset('img/criadores.jpeg')); ?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Criadores</h2>
                            <div class="separator separator-danger">✻</div>
                            <p class="description">A idéia de criar um portal que auxilie na busca por temas de TCC, veio de um projeto para uma disciplina da graduação em Engenharia Elétrica na Universidade Federal do Paraná (UFPR) em Curitiba.</p>
                        </div>
                    </div>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="<?php echo e(asset('img/faces/canova.jpeg')); ?>"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title"><a href="https://www.linkedin.com/in/guicanova/">Guilherme Canova</a></h3>
                                                    <p class="small-text">Desenvolvedor, Instrutor de Ensino, Estudante</p>
                                                    <p class="description">Estudante na UFPR, colaborador em empresa terceirizada (<a href="http://produtronich.com.br/">Produtronich</a>) na <a href="http://cnhindustrial.com/">CNHIndustrial</a>, professor de matemática no <a href="http://cursogenius.com.br/">Curso Preparatório Genius</a>.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-member">
                                            <div class="content">
                                                <div class="avatar avatar-danger">
                                                    <img alt="..." class="img-circle" src="<?php echo e(asset('img/faces/ryndack.jpg')); ?>"/>
                                                </div>
                                                <div class="description">
                                                    <h3 class="title"><a href="https://www.facebook.com/matheus.ryndack">Matheus Ryndack</a></h3>
                                                    <p class="small-text">Desenvolvedor, Empresário, Estudante</p>
                                                    <p class="description">Estudante na UFPR, dono da empresa <a href="http://ryndackcomponentes.com.br/">Ryndack</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>