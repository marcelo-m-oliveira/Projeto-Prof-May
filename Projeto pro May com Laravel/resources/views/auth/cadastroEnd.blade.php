@extends('layouts.app')
<br><br><br><br>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="text-center">Cadastro de Endereço</h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('carrinho.concluir') }}">
                        {{ csrf_field() }}
                        <div class="input-field">
                            <input id="rua" type="text" name="rua" value="{{ old('rua') }}" class="validate {{ $errors->has('rua') ? ' invalid' : '' }}" required autofocus>
                            <label for="rua" data-error="{{ $errors->has('rua') ? $errors->first('rua') : null }}" >Rua</label>
                        </div>
                        <div class="input-field">
                                <input id="numero" type="text" name="numeroe" value="{{ old('numero') }}" class="validate {{ $errors->has('numero') ? ' invalid' : '' }}" required autofocus>
                                <label for="numero" data-error="{{ $errors->has('numero') ? $errors->first('numero') : null }}" >Número</label>
                        </div>
                        <div class="input-field">
                                <input id="bairro" type="text" name="bairro" value="{{ old('bairro') }}" class="validate {{ $errors->has('bairro') ? ' invalid' : '' }}" required autofocus>
                                <label for="bairro" data-error="{{ $errors->has('bairro') ? $errors->first('bairro') : null }}" >Bairro</label>
                        </div>
                        <div class="input-field">
                                <input id="cep" type="text" name="cep" value="{{ old('cep') }}" class="validate {{ $errors->has('cep') ? ' invalid' : '' }}" required autofocus>
                                <label for="cep" data-error="{{ $errors->has('cep') ? $errors->first('cep') : null }}" >CEP</label>
                        </div>
                        <div class="">
                            <button type="submit" class="btn blue waves-effect waves-light col l6 m6 s5">
                                Cadastrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
