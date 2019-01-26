@extends('layouts.app') 

@section('content')

    <div class="row">
        <div class="col-6 offset-2">
            <h1 class="pt-5 text-center"> Perfil del Usuario</h1>
            <hr>

                <div class="d-inline-block">
                    <img class="" width="250" height="250" src="/storage/{{ $user->avatar }}">              
                </div>
                
                <div class="pull-right mt-5">
                    <h6> <strong><ins>Nombre:</ins></strong> {{ $user->name }}</h6>
                    <h6> <strong><ins>E-mail:</ins></strong> {{ $user->email }}</h6> 
                    <h6> <strong><ins>Direccion de Entrega:</ins></strong> {{ $user->direccion_de_entrega }} </h6> 
                    <h6> <strong><ins>Codigo Postal:</ins></strong> {{ $user->codigo_postal }}</h6>
                    <h6> <strong><ins>CUIT:</ins></strong> {{ $user->cuit }}</h6>
                    <h6> <strong><ins>Telefono:</ins></strong> {{ $user->telefono }}</h6>
                    <h6> <strong><ins>Tipo de Usuario:</ins></strong> {{ $user->role }}</h6>
                </div>
            <hr>
            <a href="/showClients" class="btn btn-info offset-4 col-4" role="button">Volver a Clientes</a>
            <hr>
        </div>
    </div>
@endsection