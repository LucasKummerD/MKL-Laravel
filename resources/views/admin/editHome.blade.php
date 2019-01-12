@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header text-center" style="background-color: #3768A2; color:white">{{ __('Productos Destacados') }}</div>

                    <div class="card-body ">
                        <form id="formulario" name="registerForm" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 1') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 2') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 3') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 4') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 5') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 6') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>     

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 7') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 8') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Producto 9') }}</label>
                                <div class="col-md-2">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <div id="errorName"></div>
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