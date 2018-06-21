@extends('layouts.app')

@section('content')
<div class="section section-header">
    <div class="parallax filter">
      <div class="image"
          style="background-image: url('{{ asset('/img/esqueceu_senha.jpeg') }}')">
      </div>
        <div class="container">
            <div class="content">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <div class="title-area">
                          <h2>Esqueci minha senha</h2>

                          <div class="separator separator-danger">✻</div>
                      </div>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-3">
                                <button type="submit" class="btn btn-primary btn-fill">
                                    Enviar link de recuperação
                                </button>
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
