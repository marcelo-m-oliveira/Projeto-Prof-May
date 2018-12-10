<!DOCTYPE html>
<!--
    * Desenvolvido por: Marcelo Moreira de Oliveira e Lucas de Sousa
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salgados do Celinho e Buchecha</title>
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext')}}" rel='stylesheet'
    type='text/css'>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::to('css/estilo.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::to('css/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="#" href="imagens/Coxinha.png">
</head>

<body class="cor-fundo">
    <!--Barra de navegação-->
    <div class="container-fluid">
        <nav class="navbar  fixed-top navbar-expand-lg navbar-light" style=" background-color: #009688;">
            <a class="navbar-brand" href="/">
                <img class="img-responsive" src="{{ asset('imagens/Coxinha.png')}}" width="50" height="50" alt="">Salgados do Celinho e
                Buchecha
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"
            aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="barra-navegacao">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produtos">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contatos">Fale conosco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Sobre-nos">Sobre nós</a>
                </li>
            </ul>
            @guest
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="login">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Cadastrar</a>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('carrinho.index') }}">
                            {{ __('Carrinho') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('carrinho.compras') }}">
                            {{ __('Minhas Compras') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </li>
            </ul>
            @endguest

    </div>
</nav>
</div>
<div class="my-4"></div>
<!--Fim Barra de navegação-->
<div>
    @yield('content')
</div>
<!--Inicio Rodapé-->
<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <hr>
        </div>
        <div class="col-md-4 ml-5">
            <h3 class="title">Localização</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.7068718850583!2d-38.949140685751026!3d-12.268105149396277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71437a08bc519e7%3A0xdd480874d06aa699!2sR.+Rio+Paje%C3%BA%2C+15+-+Bras%C3%ADlia%2C+Feira+de+Santana+-+BA%2C+44088-426!5e0!3m2!1spt-BR!2sbr!4v1535582768892"></iframe>
            </div>
        </div>
        <div id="Contatos" class=" col-sm-4 ml-3">
            <h3>Contatos</h3>
            <div class="list-group text-center">
                <p class="text-left">Marcelo Oliveira (Celinho)</p>
                <p class="text-left">marcelomra.oliveira@gmail.com</p>
                <p class="text-left">Lucas de Sousa (Buchecha)</p>
                <p class="text-left">lucas.dsousast@gmail.com</p>
            </div>
        </div>

        <div class="col-sm-3">
            <h3>Social</h3>
            <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                <a class="btn btn-outline-primary" href="#"><i class="fab fa-facebook"></i> Facebook</a>
                <a class="btn btn-outline-info" href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a class="btn btn-outline-warning" href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
            </div>

            <div class="col-12 mt-5">
                <blockquote class="blockquote text-center">
                    <p class="blockquote-footer">&copy; 2018 Desenvolvido por
                        <a href="https://www.facebook.com/Marcelo.M.de.Olliveira "><cite title="Titulo">Marcelo Moreira
                            de Oliveira</cite></a>
                            e
                            <a href="https://www.facebook.com/lucas.santana.1010?fb_dtsg_ag=AdwtomGwWJS56DfY1SaEx4v77RvekeRTRL7X1b9DlfCNpA%3AAdxQ8OPz8GMnr-jszFOOnFyezKmPx0HkONSNOJf16MZlCg"><cite
                                title="Titulo">Lucas de Sousa Santana</cite></a>
                            </p>

                        </blockquote>

                    </div>

                </div>
            </div>
            <!--Fim Rodapé-->
        </body>
        <script type="text/javascript" src="{{ URL::to('js/app.js')}}"></script>
        <script type="text/javascript" src="{{ URL::to('js/carrinho.js')}}"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        @stack('scripts')
        <script type="text/javascript">
            $( document ).ready(function(){
                $(".button-collapse").sideNav();
                $('select').material_select();
            });
        </script>

        </html>
