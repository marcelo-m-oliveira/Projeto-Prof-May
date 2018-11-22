@extends('layouts.app')
@section('content')

<!--Inicio Form-->
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-4">
            <h1 class="display-4 my-5"> {{ __('Endereço')}}</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form method="POST" action="{{ route('cadastrar') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-sm-5">
                        <input id="name" type="text" placeholder="Nome" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-5">
                        <input id="email" type="text" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-5">
                        <input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" value="{{ old('password') }}" required autofocus>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group col-sm-5">
                        <input id="password2" type="password" placeholder="Confirme a Senha" class="form-control{{ $errors->has('password2') ? ' is-invalid' : '' }}"
                            name="password2" value="{{ old('password2') }}" required autofocus>

                        @if ($errors->has('password2'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password2') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group mr-auto ml-2"></div>
                    <a href="{{route('inicio')}}" class="btn btn-outline-danger mr-2">{{ __('Voltar')}}</a>
                    <button type="submit" class="btn btn-outline-primary mr-2">{{ __('Cadastrar')}}</button>
                </div>


            </form>
        </div>
    </div>
</div>
<!--Fim Form-->
@endsection
