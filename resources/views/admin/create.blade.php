@extends('layouts.masterAdmin') 

@section('content')
    <header class="bg-dark text-white">
        <div class="container text-center pt-3 pb-1">
            <h3>Carga de Stock</h3>
            <p >Formulario para cargar productos.</p>
        </div>
    </header>
    <section class="bg-home">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <br>

        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="" method="post">
                        @csrf
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>Registrar producto</h2>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del Producto" >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="descripcion" placeholder="Breve descripción del Producto" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="precio" placeholder="Precio del Producto" >
                            </div>	
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="stock" placeholder="Cantidad de Unidades" >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="category_id" placeholder="Indique la categoria" >
                            </div>
                            
                            <div class="form-group col-lg-10 mx-auto">
                                <label>Foto del Producto</label>
                                <input type="file" name="">
                            </div>

                            <div class="form-group col-10 m-auto col-sm-8 offset-sm-2">
                                <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Registrar Producto</button>
                            </div>
                        </form>
                    </div>                        
                </div>
            </div>
        </div>
    </section>    

@endsection