@extends('layouts.app')

@section('content')

    <div class="offset-2 col-8 py-5">
            <div class="offset-3">
            <h1 class="d-inline-block">Listado de Registros</h1>
            </div>
            <div class="pt-5">
                <ul class="list-unstyled">
                    @foreach($records as $record)
                        <li class="buttons-admin">
                        <div class="d-flex justify-content-around">
                            <a>{{ $record->product1 }}</a>
                            <a>{{ $record->product2 }}</a>
                            <a>{{ $record->product3 }}</a>
                            <a>{{ $record->product4 }}</a>
                            <a>{{ $record->product5 }}</a>
                            <a>{{ $record->product6 }}</a>
                            <a>{{ $record->product7 }}</a>
                            <a>{{ $record->product8 }}</a>
                            <a>{{ $record->product9 }}</a> 
                            <div class="pull-right col-4">  
                                <a href="{{$record->id}}/editHome" class="btn btn-info" role="button">Editar Registro</a>
                            </div>
                        </div>     
                        </li>
                        <hr>
                    @endforeach
                </ul>
            </div>
        </div>

@endsection