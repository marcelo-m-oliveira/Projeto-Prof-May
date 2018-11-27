@extends('layouts.app')
@section('content') 

<!--Produtos-->
<div class="container">
    <h1 class="display-3 text-center produtos">Produtos</h1>
    <div class="card-deck">
        <div class="card">
            <img class="salgados img-responsive card-img-top" src="imagens/100-salgados-fritos-para-festa.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Coxinha</h5>
                <p class="card-subtitle mb-2 text-muted my-3">A coxinha mais top que vc vai comer nessa vida</p>
            </div>
            <button type="submit" class="btn btn-outline-success">Comprar R$ 1,00</button>
            <div class="card-footer">
                <small class="text-muted">A melhor</small>
            </div>
        </div>
        <div class="card">
            <img class="salgados img-responsive card-img-top" src="imagens/esfirra-aberta-de-carne-para-diabeticos.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Esfirra</h5>
                <p class="card-subtitle mb-2 text-muted my-3">Melhor que a do Habib's (oooopa)</p>
            </div>
            <button type="submit" class="btn btn-outline-success">Comprar R$ 1,00</button>
            <div class="card-footer">
                <small class="text-muted">Recheadíssima</small>
            </div>
        </div>
        <div class="card">
            <img class="salgados img-responsive card-img-top" src="imagens/quibe-de-bacalhau.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Quibe</h5>
                <p class="card-subtitle mb-2 text-muted my-3">Quibe sempre é top né? Compra logo essa delícia!</p>
            </div>
            <button type="submit" class="btn btn-outline-success">Comprar R$ 1,00</button>
            <div class="card-footer">
                <small class="text-muted">Topissimo</small>
            </div>
        </div>
        <div class="card">
            <img class="salgados img-responsive card-img-top" src="imagens/pastelzinho.jpg " alt="Nature">
            <div class="card-body">
                <h5 class="card-title">Pastelzinho</h5>
                <p class="card-subtitle mb-2 text-muted">Um delicioso pastelzinho de carne focado na crocância</p>
            </div>
            <button type="submit" class="btn btn-outline-success">Comprar R$ 1,00</button>
            <div class="card-footer">
                <small class="text-muted">Topissimo</small>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="card-deck">
        <div class="card">
            <img class="salgados img-responsive card-img-top" src="imagens/queijo.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Bolinho de Queijo</h5>
                <p class="card-subtitle mb-2 text-muted">Feito pra vegetarianos (e não vegetarianos tbm hahaha)</p>
            </div>
            <button type="submit" class="btn btn-outline-success">Comprar R$ 1,00</button>
            <div class="card-footer">
                <small class="text-muted">A melhor</small>
            </div>
        </div>
        <div class="card">
            <img class="salgados img-responsive card-img-top" src="imagens/carne-seca.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Bolinho de Carne Seca</h5>
                <p class="card-subtitle mb-2 text-muted my-3">Melhor que esse só dois desse</p>
            </div>
            <button type="submit" class="btn btn-outline-success">Comprar R$ 1,00</button>
            <div class="card-footer">
                <small class="text-muted">Recheadíssima</small>
            </div>
        </div>
        <div class="card">
            <img class="salgados img-responsive card-img-top" src="imagens/calabresa.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Bolinho de Calabresa</h5>
                <p class="card-subtitle mb-2 text-muted my-3">Pra levar pra aquele churrascão com a galera</p>
            </div>
            <button type="submit" class="btn btn-outline-success">Comprar R$ 1,00</button>
            <div class="card-footer">
                <small class="text-muted">Topissimo</small>
            </div>
        </div>
        <div class="card">
            <img class="salgados img-responsive card-img-top" src="imagens/churros.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Churros</h5>
                <p class="card-subtitle mb-2 text-muted my-3">Nossos salgados também são doces, tá?</p>
            </div>
            <button type="submit" class="btn btn-outline-success">Comprar R$ 1,00</button>
            <div class="card-footer">
                <small class="text-muted">Topissimo</small>
            </div>
        </div>
    </div>
</div>

<div align="center" class="container">
<a class="btn btn-outline-success my-4" href="/">Voltar ao Inicio</a>
</div>

<br>
<br>
<br>
<br>
<br>

</div>
<!--Fim Produtos-->
@endsection
