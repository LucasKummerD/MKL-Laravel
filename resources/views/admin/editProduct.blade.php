@extends('layouts.masterAdmin')

@section('content')
    <header class="bg-dark text-white">
        <div class="container text-center">
            <h1>Modificar Producto</h1>
            <p class="lead">Ocupe los campos que quiere modificar.</p>   
        </div>
    </header>
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="" method="post">  <!-- controlador/insertar.php -->
                        @csrf
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>{{ $product['nombre'] }}</h2>     
                            </div>
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Nombre del Producto') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="{{ $product->nombre }}" >
                            </div>
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Descripcion del Producto') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="descripcion" placeholder="{{ $product->descripcion }}" >
                            </div>	
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Precio del Producto') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="precio" placeholder="{{ $product->precio }}" >
                            </div>
                            
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Stock del Producto') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="precio" placeholder="{{ $product->stock }}" >
                            </div>

                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Categoria del Producto') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="id_categoria" placeholder="{{ $product->category->name }}" >
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