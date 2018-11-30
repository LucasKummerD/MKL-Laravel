@extends('layouts.master') 

@section('content')

<div class="row">
    <div class="col-6 offset-3">
        <h4>Usuarios Activos</h4>
        <hr>
        <ul class="unstyled-list">
            @foreach($users as $user)
            <li class="d-flex flex-row">
                <a class="mr-auto p-2" href="/backoffoce/users/{{ $user->id }}">{{ $user->name }}</a>
                <div class="buttons-admin d-flex">
                    <form action="/backoffice/users/delete/{{ $user->id }}" method="post" class="p-2">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>
                    <div class="d-flex">
                        <a href="#" class="btn btn-warning p-2">Editar</a>
                    </div>  
                </div>
            </li>
            <hr>
            @endforeach
        </ul>
    </div>
</div>

@endsection