@extends('layouts.app') 

@section('content')

    <div class="row">
        <div class="col-6 offset-3">
            <h2 align="center"> Perfil del Usuario</h2>
            <hr>
            <ul class="unstyled-list">
                
                <li class="d-flex flex-row">
                    <h4> <strong><ins>Nombre:</ins></strong> {{ $user['name'] }}</h4>
                </li>
                
                <li class="d-flex flex-row"> 
                    <h4> <strong><ins>Email:</ins></strong> {{ $user['email'] }}</h4>
                </li>
            </ul>
            <a href="/showClients" class="btn btn-info" role="button">Volver a Clientes</a>
            <hr>
        </div>
    </div>

@endsection