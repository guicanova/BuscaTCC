@extends('layouts.app')

@section('content')
<div class="section section-header">
    <div class="parallax filter">
      <div class="image"
          style="background-image: url('{{ asset('/img/error.jpeg') }}')">
      </div>
        <div class="container">
            <div class="content">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="title-area">
                          <h2>Em Manutenção!</h2>

                          <div class="separator separator-danger">✻</div>
                          
                          <h2>{{ $exception->getMessage() }}</h2>
                          
                      </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
