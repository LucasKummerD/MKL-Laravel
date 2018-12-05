@extends('layouts.partials.navbarAdmin') 

@section('content')

<div class="row">
    <div class="col-6 offset-3">
        <h4>Usuarios Activos</h4>
        <hr>
        <ul class="unstyled-list">
            @foreach($users as $user)
            <li class="d-flex flex-row">
                <a class="mr-auto p-2" href="admin/showUser/{$id}">{{ $user->name }}</a> <h6>{{ $user->email }}</h6>
                <div class="buttons-admin d-flex">
                    <form action="" method="post" class="p-2">  <!-- backoffice/users/delete/{{ $user->id }} -->                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                        <input type="submit" value="Modificar" class="btn btn-info">
                    </form> 
                </div>
            </li>
            <hr>
            @endforeach
        </ul>
    </div>
</div>

@endsection