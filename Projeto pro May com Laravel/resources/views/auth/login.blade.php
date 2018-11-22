@extends('layouts.app')
@section('content')
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>Login</h4>
                    <form method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        
                        @include('auth._form_email')
                        @include('auth._form_password')
                        
                        <div class="ml-2">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}} id="remember" />
                            <label for="remember">Lembre-se de mim</label>
                        </div>
                        
                        <div class="ml-2">
                            <button type="submit" class="btn blue waves-effect waves-light col l6 m6 s5">
                                Entrar
                            </button>
                        </div>
                        
                        <div class="row">
                            <a class="ml-5" href="{{ url('/password/reset') }}">
                                Esqueceu sua senha?
                            </a>
                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
