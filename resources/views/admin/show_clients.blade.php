@extends('layouts.app') 

@section('content')

<div class="row">
    <div class="col-6 offset-3">
        <h4>Usuarios Activos</h4>
        <hr>
        <ul class="unstyled-list">
            @foreach($users as $user)
            <li class="d-flex flex-row">
                <a class="mr-auto p-2">{{ $user->name }} - {{ $user->email }} </a>
                <div class="buttons-admin d-flex">
                    <form action="" method="post" class="p-2">                    
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                    <input type="submit" value="Ver Más" class="btn btn-info">
                    </form> 
                </div>
            </li>
            <hr>
            @endforeach
        </ul>
    </div>
</div>

@endsection