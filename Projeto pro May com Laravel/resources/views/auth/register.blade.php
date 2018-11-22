@extends('layouts.app')
<br><br><br><br>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="text-center">Cadastro de usuário</h4>
                <div class="card-body">
                    <form method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <div class="input-field">
                            <input id="name" type="text" name="name" value="{{ old('name') }}" class="validate {{ $errors->has('name') ? ' invalid' : '' }}" required autofocus>
                            <label for="name" data-error="{{ $errors->has('name') ? $errors->first('name') : null }}" >Nome</label>
                        </div>
                        @include('auth._form_email')
                        @include('auth._form_password')
                        @include('auth._form_password_confirm')
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
