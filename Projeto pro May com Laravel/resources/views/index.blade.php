@extends('layouts.app')
@section('content')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Inicio Slide-->
<div class="slider">
    <ul class="slides">
      <li>
        <img  src="imagens/baner_superior4.jpg"> 
        <div class="caption center-align">
          <h3>Salgados do Celinho e Buchecha</h3>
          <h5 class="light grey-text text-lighten-3">O melhor Salgado para você e sua familia!</h5>
        </div>
      </li>
      <li>
        <img src="imagens/baner_superior4.jpg"> 
        <div class="caption left-align">
          <h3>Salgados do Celinho e Buchecha</h3>
          <h5 class="light grey-text text-lighten-3">O melhor Salgado para você e sua familia!</h5>
        </div>
      </li>
      <li>
        <img src="imagens/baner_superior4.jpg">
        <div class="caption right-align">
          <h3>Salgados do Celinho e Buchecha</h3>
          <h5 class="light grey-text text-lighten-3">O melhor Salgado para você e sua familia!</h5>
        </div>
      </li>
    </ul>
    <div id="Produtos"></div>
  </div>
<script type="text/javascript">
	 $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
</script>
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
                <p class="card-subtitle mb-2 text-muted my-3">Uma cópia descarada do Habibs, porém bem mais
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
<a class="btn btn-outline-success my-4" href="produtos">Mais produtos</a>
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
