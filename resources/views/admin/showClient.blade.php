@extends('layouts.app') 

@section('content')

    <div class="row">
        <div class="col-6 offset-3">
            <h2 class="text-center pt-5"> Perfil del Usuario</h2>
            <hr>
            <ul class="unstyled-list pt-3">
                
                <li class="d-flex flex-row py-1">
                    <h4> <strong><ins>Nombre:</ins></strong> {{ $user['name'] }}</h4>
                </li>
                
                <li class="d-flex flex-row py-1"> 
                    <h4> <strong><ins>Email:</ins></strong> {{ $user['email'] }}</h4>
                </li>

                <li class="d-flex flex-row py-1"> 
                    <h4> <strong><ins>Direccion de Entrega:</ins></strong> {{ $user['direccion_de_entrega'] }}</h4>
                </li>

                <li class="d-flex flex-row py-1"> 
                    <h4> <strong><ins>Codigo Postal:</ins></strong> {{ $user['codigo_postal'] }}</h4>
                </li>

                <li class="d-flex flex-row py-1"> 
                    <h4> <strong><ins>CUIT:</ins></strong> {{ $user['cuit'] }}</h4>
                </li>

                <li class="d-flex flex-row py-1"> 
                    <h4> <strong><ins>Telefono:</ins></strong> {{ $user['telefono'] }}</h4>
                </li>
            </ul>
            <a href="/showClients" class="btn btn-info offset-4 col-4" role="button">Volver a Clientes</a>
            <hr>
        </div>
    </div>

@endsection