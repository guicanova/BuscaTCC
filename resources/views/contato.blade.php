@extends('layouts.app')

@section('content')

    <div class="section section-header">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('{{ asset('/img/maquina_papeis.jpeg') }}')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p>Contato</p>
                        <h1 class="title-modern">{{ config('app.name', 'Laravel') }}</h1>
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
                  <form class="form-horizontal" method="POST" action="{{ route('enviarMensagem') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      @if (session('status'))
                          <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              {{ session('status') }}
                          </div>
                      @endif
                      @if ($errors->any())
                          <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <p>  {{ $error }}</p>
                                  @endforeach
                              </ul>
                          </div>
                      @endif

                      <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                          <label for="nome" class="col-md-4 control-label">Nome</label>

                          <div class="col-md-6">
                              <input id="nome" type="text" placeholder="Digite seu nome!" class="form-control" name="nome" value="{{ old('nome') }}" required>

                              @if ($errors->has('nome'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nome') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Email</label>

                          <div class="col-md-6">
                              <input id="email" type="email" placeholder="Digite seu email!" class="form-control" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('mensagem') ? ' has-error' : '' }}">
                          <label for="mensagem" class="col-md-4 control-label">Mensagem</label>

                          <div class="col-md-6">
                              <textarea rows="20" id="mensagem" type="text" placeholder="Digite sua mensagem!" class="form-control" name="mensagem" value="{{ old('mensagem') }}" required></textarea>

                              @if ($errors->has('mensagem'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('mensagem') }}</strong>
                                  </span>
                              @endif
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


    <div id="sobre" class="section section-our-team-freebie">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('{{ asset('img/criadores.jpeg') }}')">
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
                                                  <img alt="..." class="img-circle" src="{{ asset('img/faces/canova.jpeg') }}"/>
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
                                                  <img alt="..." class="img-circle" src="{{ asset('img/faces/ryndack.jpg') }}"/>
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
@endsection
