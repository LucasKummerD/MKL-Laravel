@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header text-center" style="background-color: #3768A2; color:white">{{ __('Crear Cuenta') }}</div>

                    <div class="card-body ">
                        <form id="formulario" name="registerForm" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre y Apellido') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" id="email" class="col-md-4 col-form-label text-md-right">{{ __('Direccion de e-mail') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <div id="errorEmail"></div>                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
                                    <small class="form-text text-muted">Debe tener entre 4 a 12 caracteres, contenter letras en mayúsculas, minúsculas y números</small>
                                    <div id="errorPassword"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Re-escriba contraseña') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                    <div id="errorPassword_confirmation"></div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 ">
                                <div class="col-md-6 offset-md-4 ">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrarse') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
