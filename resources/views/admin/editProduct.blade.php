@extends('layouts.app')

@section('content')
    <header class="bg-light">
        <div class="container text-center">
            <h1 class="mt-5">Modificar Producto</h1>
            <p class="lead">Ocupe los campos que quiere modificar.</p>
            <hr>   
        </div>
    </header>
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="" method="POST" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2><strong>Producto:</strong>{{ $product->nombre }}</h2>
                                <h4><strong>Codigo del Producto:</strong>{{ $product->id }}</h4>     
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del Producto">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="descripcion" placeholder="Breve descripcion del Producto">
                            </div>	
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="precio" placeholder="Precio del Producto">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="stock" placeholder="Cantidad de unidades">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="category_id" placeholder="Indique la Categoria">
                            </div>                           

                            <div class="form-group col-lg-10 mx-auto">
                                <label>Foto del Producto</label>
                                <input type="file" name="">
                            </div>

                            <div class="form-group col-6 m-auto col-sm-8 offset-sm-2">
                                <button type="submit" class="btn btn-success mt-3">Modificar</button>
                                <a href="/showProducts" class="btn btn-info my-3" role="button">Volver a Productos</a>
                            </div>
                            <hr> 
                        </form>
                    </div>                        
                </div>
            </div>
        </div>
    </section>
@endsection