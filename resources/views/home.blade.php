@extends('layouts.app')

@section('content')

    <div class="section section-header">
        <div class="parallax filter filter-color-blue">
          <div class="image"
              style="background-image: url('{{ asset('/img/maquina_papeis.jpeg') }}')">
          </div>
          <div class="container">
              <div class="content">
                  <div class="title-area">
                    <br><br><br><br>
                      <p>Portal</p>
                      <h2 class="title-modern">{{ config('app.name', 'Laravel') }}</h2>
                      <h3>Seu portal de temas para TCC online!</h2>
                      <div class="separator line-separator">♦</div>
                  </div>

                  <button class="btn btn-danger btn-fill btn-lg" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Sair
                  </button>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </div>

          </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-member">
                  <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Buscar por temas de TCC</h1>
                        <div class="separator line-separator">♦</div>
                    </div>
                    <div class="description">
                        <p class="description">Está sem idéias? Buscando por inspiração? <br>Encontre aqui o que precisa!</p>
                    </div>
                    <div class="button-get-started">
                        <a href="{{ route('verTemas') }}" class="btn btn-default btn-lg ">
                            Buscar
                        </a>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-member">
                  <div class="content">
                    <div class="title-area">

                        <h1 class="title-modern">Inserir novos temas de TCC</h1>
                        <div class="separator line-separator">♦</div>
                    </div>
                    <div class="description">
                        <p class="description">Está com idéias e deseja incentivar alguém? É professor e busca por alunos para orientar? Compartilhe suas idéias conosco!</p>
                    </div>
                    <div class="button-get-started">
                        <a href="{{ route('inserirTema') }}" class="btn btn-default btn-lg ">
                            Inserir
                        </a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="section section-small section-get-started">
        <div class="parallax filter filter-color-green">
            <div class="image"
                style="background-image: url('{{ asset('/img/fale_conosco.jpeg') }}')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2>Sugestões?</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description"> Algo pode ser inserido, melhorado, removido ou ajustado? Fique à vontade!</p>
                </div>

                <div class="button-get-started">
                    <a href="{{ route('contato') }}" class="btn btn-white btn-lg">Entre em contato!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
