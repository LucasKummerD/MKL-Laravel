@extends('layouts.app')

@section('content')

 <header class="bg-dark text-white">
        <div class="container text-center">
            <h1>Modificar Datos de Contacto</h1>
            <p class="lead">Ocupe los campos que quiere modificar.</p>   
        </div>
    </header>
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="" method="post">
                        @csrf
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>{{ $user->name }}</h2>     
                            </div>
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Nombre y Apellido') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="{{ $user->name }}" >
                            </div>
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Direccion de e-mail') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="{{ $user->email }}" >
                            </div>	
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Direccion de entrega') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="direccion de entrega" placeholder="{{ $user->direccion de entrega }}" >
                            </div>
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Codigo Postal') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="codigo postal" placeholder="{{ $user->codigo postal }}" >
                            </div>

                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Cuit') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="cuit" placeholder="{{ $user->cuit }}" >
                            </div>                           

                            <div class="form-group col-lg-10 mx-auto">
                                <label>Foto del Producto</label>
                                <input type="file" name="">
                            </div>

                            <div class="form-group col-10 m-auto col-sm-8 offset-sm-2">
                                <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Modificar</button>
                            </div>
                        </form>
                    </div>                        
                </div>
            </div>
        </div>
    </section>

@endsection

    