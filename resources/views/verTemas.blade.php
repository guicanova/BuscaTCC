@extends('layouts.app')

@section('content')
<div class="section section-header">
    <div class="parallax filter">
      <div class="image"
          style="background-image: url('{{ asset('/img/register.jpeg') }}')">
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
        @php
          $numeroColunas = 2;
          $colunas = 0;
        @endphp

      @foreach ($temas as $tema)
        @php
          $colunas++;
        @endphp
        <div id="tema_{{ $tema->id }}" class="card text-center col-md-{{ 12 / $numeroColunas - 1 }}">
          <div class="card-header">
            <br>
            <p class="card-text"><a href="#buscaPorArea" class="badge badge-pill">{{ $tema->area }}</a> <a href="#buscaPorNivel" class="text-uppercase badge badge-pill badge-info">{{ $tema->nivel }}</a></p>
          </div>
          <div class="card-body">
            <br>
            <h2 class="card-title">{{ $tema->titulo }}</h2>
            <p class="card-text">{{ $tema->instituicao }}</p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{ $tema->id }}" aria-expanded="false" aria-controls="{{ $tema->titulo }}" onclick=$(this).hide()>
              Mais
            </button>
            <br>
            <div class="collapse" id="{{ $tema->id }}">
              <br>
              @if ($tema->user->interesse == 'sim')
              <p class="card-text"><b>{{ $tema->user->tipo }}:</b> {{ $tema->user->name }} ({{ $tema->user->instituicao }})</p>
              @endif
              <p class="card-text text-justify"><b>Descrição:</b> {{ $tema->corpo }}</p>
              <p class="card-text"><b>Tempo para o desenvolvimento:</b> {{ $tema->tempo }}</p>
              <p class="card-text"><b>Data máxima para o início:</b> {{ $tema->data_inicio }}</p>
            </div>
            <br>
          </div>
        </div>
        <div class="col-md-1"></div>
        @if ($colunas == 2)
      </div>
      <div class="row">
        @php
          $colunas = 0;
        @endphp
        @endif

      @endforeach
      </div>
    </div>
</div>
@endsection
