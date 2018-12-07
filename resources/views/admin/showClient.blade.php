@extends('layouts.app') 

@section('content')

    <div class="row">
        <div class="col-6 offset-3">
            <h3>Perfil del Usuario</h3>
            <h4>{{ $user['name'] }}</h4>
            <hr>
                <ul class="unstyled-list">
                    <li class="d-flex flex-row">{{ $user['email'] }}</li>
                </ul>
            <hr>
        </div>
    </div>

@endsection