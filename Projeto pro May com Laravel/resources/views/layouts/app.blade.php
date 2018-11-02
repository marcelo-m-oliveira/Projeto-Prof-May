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
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.2.0/css/all.css')}}" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="#" href="imagens/Coxinha.png">
</head>

<body class="cor-fundo">
    <!--Barra de navegação-->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style=" background-color: #e3f2fd; ">
            <a class="navbar-brand" href="{{ route('inicio')}}">
                <img class="img-responsive" src="imagens/Coxinha.png" width="50" height="50" alt="">Salgados do Celinho e
                Buchecha
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"
                aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="barra-navegacao">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Fale-conosco">Fale conosco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Sobre-nos">Sobre nós</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Cadastrar">Cadastrar</a>
                    </li>
                    <form class="form-inline my-5 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </ul>

            </div>
        </nav>
    </div>
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
            <div class=" col-sm-4 ml-3">
                <h3>Contatos</h3>
                <div class="list-group text-center">
                    <p class="text-left">Telefone:(xx) xxxxx-xxxx</p>
                    <p class="text-left">Marcelo Oliveira (Celinho)</p>
                    <p class="text-left">maxcelo.lima1000@gmail.com</p>
                    <p class="text-left">Lucas de Sousa (Bochecha)</p>
                    <p class="text-left">Lucasalgumacoisa@gmail.com</p>
                </div>
            </div>

            <div class="col-sm-3">
                <h3>Social</h3>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-primary" href="https://www.facebook.com/Mixcompontoeacesso/?timeline_context_item_type=intro_card_work&timeline_context_item_source=100003811757067&fref=tag"><i
                            class="fab fa-facebook"></i> Facebook</a>
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
<script></script>

</html>
