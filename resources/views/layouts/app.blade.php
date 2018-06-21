<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/gaia.css') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/fonts/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <style>
      .badge-light {
          color: #212529;
          background-color: #f8f9fa;
      }
      .badge-info {
          color: #fff;
          background-color: #17a2b8;
      }
    </style>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-5000256674316985",
        enable_page_level_ads: true
      });
    </script>
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-burger" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">

                  <div class="text-white" style="position:relative; bottom:6px;">
                    <img src="{{ asset('img/favicon.png') }}" style="position:relative; bottom:4px;" alt="TCC logo" width="40" height="40"> {{ config('app.name', 'Laravel') }}
                  </div>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
<!--
                    <li class="dropdown">
                        <a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Compartilhar
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </li>
-->
                    @if (Route::has('login'))

                            @auth
                            <li>
                                <a href="{{ route('home') }}">Início</a>
                            </li>
                            <li>
                                <a href="{{ route('verTemas') }}">Buscar</a>
                            </li>
                            <li>
                                <a href="{{ route('inserirTema') }}">Inserir</a>
                            </li>
                            <li>
                                <button class="btn btn-danger navbar-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Sair
                                </button>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @else
                                <li>
                                  <a href="{{ route('login') }}">Entrar</a>
                                </li>
                                <li>
                                  <a href="{{ route('register') }}">Registro</a>
                                </li>
                            @endauth

                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

        @yield('content')
    </div>
    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                  <div class="info">
                    <a href="http://ufpr.br">
                      <img src="{{ asset('img/logo_ufpr_branca.png') }}" alt="UFPR logo" width="100%" height="150" class="center-block img-fluid">
                    </a>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2">
                  <div class="info">
                    <a href="http://eletrica.ufpr.br">
                      <img src="{{ asset('img/logo_delt_branco.png') }}" alt="UFPR logo" width="100%" height="150" class="center-block img-fluid">
                    </a>
                  </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-2">

                    <div class="info">
                        <h5 class="title">O Portal!</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Início</a>
                                </li>
                                <li>
                                    <a href="{{ route('verTemas') }}">Buscar Temas</a>
                                </li>
                                <li>
                                    <a href="{{ route('inserirTema') }}">Inserir Temas</a>
                                </li>
                                <li>
                                    <a href="{{ route('contato') }}#sobre">Sobre Nós</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="info">
                        <h5 class="title"> Ajuda e Suporte</h5>
                         <nav>
                            <ul>
                                <li>
                                    <a href="{{ route('contato') }}#mensagem">Fale Conosco!</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2">
                    <div class="info">
                        <h5 class="title"> Links Externos </h5>
                         <nav>
                            <ul>
                                <li>
                                    <a target="_blank" href="http://eletrica.ufpr.br/p/tcc:listagem">Biblioteca de TCC!</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!--
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Últimas Notícias!</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is here, just give it a try and let us...
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Siga-nos!</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                -->
              </div>
            <hr>
            <div class="copyright">
                 © <script> document.write(new Date().getFullYear()) </script> Canova &amp; Ryndack
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<!--   core js files    -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="{{ asset('js/gaia.js') }}"></script>

</html>
