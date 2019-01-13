@extends('layouts.app') 

@section('content')

    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="text-center pt-5"> Perfil del Usuario</h1>
            <hr>
            <ul class="unstyled-list pt-3">
                
                <li class="d-flex flex-row py-1">
                    <h5> <strong><ins>Nombre:</ins></strong> {{ $user['name'] }}</h5>
                </li>
                
                <li class="d-flex flex-row py-1"> 
                    <h5> <strong><ins>Email:</ins></strong> {{ $user['email'] }}</h5>
                </li>

                <li class="d-flex flex-row py-1"> 
                    <h5> <strong><ins>Direccion de Entrega:</ins></strong> {{ $user['direccion_de_entrega'] }}</h5>
                </li>

                <li class="d-flex flex-row py-1"> 
                    <h5> <strong><ins>Codigo Postal:</ins></strong> {{ $user['codigo_postal'] }}</h5>
                </li>

                <li class="d-flex flex-row py-1"> 
                    <h5> <strong><ins>CUIT:</ins></strong> {{ $user['cuit'] }}</h5>
                </li>

                <li class="d-flex flex-row py-1"> 
                    <h5> <strong><ins>Telefono:</ins></strong> {{ $user['telefono'] }}</h5>
                </li>
            </ul>
            <a href="/showClients" class="btn btn-info offset-4 col-4" role="button">Volver a Clientes</a>
            <hr>
        </div>
    </div>

@endsection