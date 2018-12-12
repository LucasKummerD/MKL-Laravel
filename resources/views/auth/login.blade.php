@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header" style="background-color: #3768A2; color:white">{{ __('Iniciar Sesion') }}</div>

                <div class="card-body">
                        <form id="formularioLogin" name="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" id="email" class="col-md-4 col-form-label text-md-right">{{ __('Direccion de e-mail') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <div id="errorEmailLogin"></div>                                    
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}">
                                    <div id="errorPasswordLogin"></div>  
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Recuerdame') }}
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-2 pb-4">
                                    <button type="submit" class="btn login btn-primary">
                                        {{ __('Iniciar Sesion') }}
                                    </button>
                                </div>

                                <div class="col-md-9 offset-md-2">
                                    <a class="pt-3" href="{{ route('password.request') }}">
                                        {{ __('Olvidé mi contraseña?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
