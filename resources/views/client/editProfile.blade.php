@extends('layouts.app')

@section('content')

 <header class="bg-dark text-white">
        <div class="container text-center mt-2">
            <h1>Modificar Datos de Contacto</h1>
            <p class="lead">Ocupe los campos que quiere modificar.</p>   
        </div>
    </header>
    <section class="bg-home">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto bg-light rounded">
                    <div class="signup-form">
                        <form action="/{{ $user->id }}/editProfile" method="post" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>{{ Auth::user()->name }}</h2>     
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nombre y Apellido">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="E-mail" >
                            </div>	
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="direccion_de_entrega" placeholder="Direccion de Entrega" >
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="codigo_postal" placeholder="Codigo Postal" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="cuit" placeholder="CUIT" >
                            </div>  

                            <div class="form-group">
                                <input type="text" class="form-control" name="telefono" placeholder="Teléfono" >
                            </div>

                            <div class="form-group mt-2">
                                <label for="file">Editar Foto</label>
                                <input type="file" name="avatar" value="{{ $user->avatar }}" >
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

    