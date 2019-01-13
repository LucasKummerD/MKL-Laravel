@extends('layouts.app') 

@section('content')

<div class="row">
    <div class="col-6 offset-3 pt-5">
        <h1 class="text-center pb-3">Usuarios Activos</h1>
        <ul class="unstyled-list">
        <hr>
            @foreach($users as $user)
            <li class="d-flex flex-row">
                <a class="mr-auto p-2">{{ $user->name }} - {{ $user->email }} </a>
                <div class="buttons-admin d-flex">
                    <a href="/{{ $user->id }}/showClient" class="btn btn-info col-12" role="button">Ver Más</a>        
                </div>
            </li>
            <hr>
            @endforeach
        </ul>
    </div>
</div>

@endsection