<?php $__env->startSection('content'); ?>

    <div class="section section-header">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo e(asset('/img/maquina_papeis.jpeg')); ?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                      <br><br><br><br>
                        <p>Portal</p>
                        <h2 class="title-modern"><?php echo e(config('app.name', 'Laravel')); ?></h2>
                        <h3>Seu portal de temas para TCC online!</h2>
                        <div class="separator line-separator">♦</div>
                    </div>

                    <div class="button-get-started">
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-danger btn-fill btn-lg ">
                            Entrar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Registro</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Registre-se para utilizar nossos serviços.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-graph1"></i>
                        </div>
                        <h3>Buscar</h3>
                        <p class="description">Procure por temas separados por área de conhecimento.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <h3>Inserir</h3>
                        <p class="description">Está procurando por parceiros, bolsistas, colaboradores ou simplismente tem uma idéia inovadora?</p>
                    </div>
                </div>
            </div>
<br>
            <div class="button-get-started" style="text-align:center;">
                <a href="<?php echo e(route('register')); ?>" class="btn btn-danger btn-lg">Registrar</a>
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
                            <p class="description">A idéia de criar um portal que auxilie na busca por temas de TCC, veio da observação da quantidade de alunos sem rumo quando chega o momento de escrever a monografia. A necessidade da execução de um projeto para uma disciplina de cunho social da graduação em Engenharia Elétrica na Universidade Federal do Paraná (UFPR) em Curitiba, trouxe a oportunidade ideal para a execução desse projeto.</p>
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
                                                    <h3 class="title"><a href="https://www.linkedin.com/in/guicanova/">Guilherme Canova Bueno</a></h3>
                                                    <p class="small-text">Desenvolvedor, Empresário, Instrutor de Ensino, Estudante</p>
                                                    <p class="description">Graduando em Engenharia Elétrica na UFPR, instrutor de matemática no <a href="http://cursogenius.com.br/">Curso Preparatório Genius</a>, , amante de programação.</p>
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
                                                    <p class="description">Graduando em Engenharia Elétrica na UFPR, Diretor Geral da empresa <a href="http://ryndackcomponentes.com.br/">Ryndack</a>, desde cedo interessado em tecnologia e programação.</p>
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

    <!-- Clientes
    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h5 class="subtitle text-gray">Stakeholders</h5>
                <h2>Usuários do Portal</h2>
                <div class="separator separator-danger">∎</div>
            </div>

            <ul class="nav nav-text" role="tablist">
                <li class="active">
                    <a href="#testimonial1" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="<?php echo e(asset('img/faces/face_5.jpg')); ?>"/>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial2" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="<?php echo e(asset('img/faces/face_6.jpg')); ?>"/>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial3" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="<?php echo e(asset('img/faces/face_2.jpg')); ?>"/>
                        </div>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="testimonial1">
                    <p class="description">
                        And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color... Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all!
                    </p>
                </div>
                <div class="tab-pane" id="testimonial2">
                    <p class="description">Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all! And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color...
                    </p>
                </div>
                <div class="tab-pane" id="testimonial3">
                    <p class="description"> I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. The 'Gaia' team did a great work while we were collaborating. They provided a vision that was in deep connection with our needs and helped us achieve our goals.
                    </p>
                </div>

            </div>

        </div>
    </div>
    -->

    <div class="section section-small section-get-started">
            <div class="container">
                <div class="title-area">
                    <h2>Temas para TCC</h2>
                    <div class="separator line-separator">♦</div>

                  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

                  <div class="row">
                    <br>
                    <div class="col-md-6">
                      <canvas id="nivelAcertos" width="400" height="300"></canvas>
                    </div>
                    <br>
                    <div class="col-md-6">
                      <div class="info-icon">
                          <div class="icon text-danger">
                              <i class="pe-7s-ticket"></i>
                          </div>
                          <h3>Classificação dos Temas</h3>
                        <p class="description text-justify">
                          O portal possui temas classificados em níveis, matérias, assuntos e instituições. Tudo para facilitar na procura, você não precisa mais realizar buscas incessantes muito menos conversar com todos seus professores na procura por "inspiração".
                        </p>
                      </div>
                    </div>
                  </div>
                  
                <script>
                var ctx = document.getElementById("nivelAcertos").getContext('2d');
                var nivelAcertos = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ["Pesquisa", "Graduação", "Mestrado", "Doutorado", "Especialização"],
                        datasets: [{
                            label: 'Acertos',
                            data: [ <?php echo e($pesquisa); ?>, <?php echo e($graduacao); ?>, <?php echo e($mestrado); ?>, <?php echo e($doutorado); ?>, <?php echo e($especializacao); ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: 'Mais Cadastrados',
                            fontSize: '25'
                        },
                        legend: {
                            display: true,
                            position: 'right',
                        },
                        options: {
                            responsive: true,
                        }
                    }
                });

                </script>            
                <br><br><br>
                <div class="button-get-started">
                    <a href="<?php echo e(route('verTemas')); ?>" class="btn btn-fill btn-lg">Ver Temas!</a>
                </div>
            </div>
    </div>
    <div class="section section-small section-get-started">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('<?php echo e(asset('img/chart.jpg')); ?>')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2>Últimos Temas Adicionados</h2>
                    <div class="separator line-separator">♦</div>
                        <ul class="list-group">
                        <?php $__currentLoopData = $ultimos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ultimo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="list-group-item d-flex justify-content-between align-items-center row">
                            <div class="col-md-8"><a href="<?php echo e(route('verTemasOrderBy', ['order' => 'created_at', 'for' => 'desc'])); ?>#tema_<?php echo e($ultimo->id); ?>"><?php echo e($ultimo->titulo); ?></a></div>
                            <div class="col-md-4"><a href="<?php echo e(route('verTemasNivel', ['nivel' => $ultimo->nivel ])); ?>"><span class="badge badge-info badge-pill"><?php echo e($ultimo->nivel); ?></span></div>
                          </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section section-small section-get-started">
            <div class="container">
                <div class="title-area">
                    <h2>Vídeo de Divulgação</h2>
                    <div class="separator line-separator">♦</div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vYwaBdisWgU?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
    </div>
    
    <div class="section section-small section-get-started">
      <div class="parallax filter filter-color-black">
          <div class="image" style="background-image:url('<?php echo e(asset('img/help_us.jpeg')); ?>')">
          </div>
            <div class="container">
                <div class="title-area">
                    <h2>Sugestões?</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description"> Algo pode ser inserido, melhorado, removido ou ajustado? Fique à vontade!</p>
                </div>

                <div class="button-get-started">
                    <a href="<?php echo e(route('contato')); ?>" class="btn btn-danger btn-fill btn-lg">Entre em contato!</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>