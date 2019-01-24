@extends('layouts.app')

@section('content')

    <div class="row py-3">
        <div class="col-6 offset-3 mt-5 pt-5">
            <div class="text-center">       
                <h2 class="text-underline">Perfil del Usuario</h2>
                <h4>{{ Auth::user()->name }}</h4>    
            </div>            
            <hr>

                <div class="d-inline-block">
                    <img class="" width="250" height="250" src="/storage/{{ Auth::user()->avatar }}">              
                </div>
                
                <div class="pull-right mt-3">
                    <h6> <strong><ins>Nombre:</ins></strong> {{ Auth::user()->name }}</h6>
                    <h6> <strong><ins>E-mail:</ins></strong> {{ Auth::user()->email }}</h6> 
                    <h6> <strong><ins>Direccion de Entrega:</ins></strong> {{ Auth::user()->direccion_de_entrega }} </h6> 
                    <h6> <strong><ins>Codigo Postal:</ins></strong> {{ Auth::user()->codigo_postal }}</h6>
                    <h6> <strong><ins>CUIT:</ins></strong> {{ Auth::user()->cuit }}</h6>
                    <h6> <strong><ins>Telefono:</ins></strong> {{ Auth::user()->telefono }}</h6>
                    <a href="/{{ Auth::user()->id }}/editProfile" class="btn btn-success col-12 pt-2">Editar</a>
                </div>
            <hr>
                <div class="text-center">  
                    <a href="/home" class="btn btn-info col-3 pt-2" role="button">Volver al Inicio</a>
                </div>
        </div>
    </div>

@endsection