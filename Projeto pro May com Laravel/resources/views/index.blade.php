@extends('layouts.app')
@section('content')

<!--Inicio Slide-->
<div id="Inicio">
    <div class="container-fluid">
        <div id="carouselSite" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSite" data-slide-to="1"></li>
                <li data-target="#carouselSite" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid d-block img-carousel" src="imagens/baner_superior4.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h1 class="">Salgados do Buchecha</h1>
                        <p class="lead">O melhor Salgado para você e sua familia!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid d-block img-carousel" src="imagens/baner_superior4.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="">Salgados do Buchecha</h1>
                        <p class="lead">O melhor Salgado para você e sua familia!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid img-carousel" src="imagens/baner_superior4.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="">Salgados do Buchecha</h1>
                        <p class="lead">O melhor Salgado para você e sua familia!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Voltar</span>
            </a>
            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Avançar</span>
            </a>
        </div>
    </div>
    <div id="Produtos"></div>
</div>
<!--Fim Slide-->
<!--Produtos-->
<div class="container">
    <h1 class="display-3 text-center my-5">Produtos</h1>
    <div class="card-deck">
        <div class="card">
            <img class="img-responsive card-img-top" src="imagens/100-salgados-fritos-para-festa.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Coxinha</h5>
                <p class="card-subtitle mb-2 text-muted my-3">A coxinha mais top que vc vai comer nessa vida</p>
                <a class="btn btn-outline-success" href="#" data-toggle="modal" data-target="#Comprar">Comprar R$ 1,00</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">A melhor</small>
            </div>
        </div>
        <div class="card">
            <img class="img-responsive card-img-top" src="imagens/esfirra-aberta-de-carne-para-diabeticos.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Esfirra</h5>
                <p class="card-subtitle mb-2 text-muted my-3">Uma cópia descarada do Habib's, porém bem mais
                    gostosa (e mais recheada tbm rs)</p>
                <a class="btn btn-outline-success" href="#" data-toggle="modal" data-target="#Comprar">Comprar R$ 1,00</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Recheadíssima</small>
            </div>
        </div>
        <div class="card">
            <img class="img-responsive card-img-top my-auto" src="imagens/quibe-de-bacalhau.jpg " alt="">
            <div class="card-body">
                <h5 class="card-title">Quibe</h5>
                <p class="card-subtitle mb-2 text-muted my-3">Quibe sempre é top né? Compra logo essa delícia!</p>
                <a class="btn btn-outline-success" href="#" data-toggle="modal" data-target="#Comprar">Comprar R$ 1,00</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Topissimo</small>
            </div>
        </div>
    </div>
</div>
<div align="center" class="container">
<a class="btn btn-outline-success my-4" href="{{ route('produtos')}}">Mais produtos</a>
</div>

<!--Fim Produtos-->
<div id="Sobre-nos" class="container my-5">
    <div class="col-12 mb-3">
        <hr>
    </div>
    <h1 class="display-3 text-center my-5"> Sobre nós</h1>
    <p class="text-center">Somos uma equipe focada no atendimento e qualidade de nossos serviços e produtos.
        Buscamos atender o
        máximo
        possível as suas mensagenzinhas
        e compras nos nossos salgadinhos. Sinta-se à vontade para falar conosco sobre qualquer dúvida ou
        problema
        cliclando nos nossos nomes no fim desta página. Respondemos na hora 😊


    </p>
</div>

<div class="container">
    <div class="col-12 mb-3">
        <hr>
    </div>
    <h1 class="display-3 text-center my-5"> Sobre nossos produtos</h1>
    <p>Nossos produtos são feitos com muito amor e carinho para que você, consumidor, possa gastar seu suado
        dinheirinho nas melhores coxinhas do Brasil 😁
    </p>
</div>
@endsection
