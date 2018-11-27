@extends('layouts.master')

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
                        <form action="controlador/insertar.php" method="post">
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>Nombre del producto</h2>     
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del Producto" >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="descripcion" placeholder="Breve descripción del Producto" >
                            </div>	
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="id_categoria" placeholder="Indique el código de la categoría" >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="precio" placeholder="Precio del Producto" >
                            </div>
                            
                            <div class="form-group col-lg-10 mx-auto">
                                <label>Foto del Producto</label>
                                <input type="file" name="producto">
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