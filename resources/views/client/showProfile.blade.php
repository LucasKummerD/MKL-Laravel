@extends('layouts.app')

@section('content')

   <div class="row py-3">
        <div class="col-6 offset-3 mt-5 pt-5">
        
            <h2>Perfil del Usuario</h2>                
        <hr>
            <h6> <strong><ins>Nombre:</ins></strong> {{ $user->name }}</h6>
            <h6> <strong><ins>E-mail:</ins></strong> {{ $user->email }}</h6> 
            <h6> <strong><ins>Direccion de Entrega:</ins></strong> {{ $user->direccion_de_entrega }} </h6> 
            <h6> <strong><ins>Codigo Postal:</ins></strong> {{ $user->codigo_postal }}</h6>
            <h6> <strong><ins>CUIT:</ins></strong> {{ $user->cuit }}</h6>
            <h6> <strong><ins>Telefono:</ins></strong> {{ $user->telefono }}</h6>
            <hr>
            <a href="/{{ Auth::user()->id }}/editProfile" class="btn btn-info">Editar</a>
            <a href="/home" class="btn btn-info" role="button">Volver al Inicio</a>
        </div>
    </div>

@endsection