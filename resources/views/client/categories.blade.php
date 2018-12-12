@extends('layouts.app')

@section('content')

    <div class="offset-2 col-8">
        <h1>Listado de Categorias</h1>
        <div>
            <ul class="list-unstyled">
                @foreach($categories as $category)
                    <li class="buttons-admin col-12">
                        <div class="d-flex justify-content-around">
                            <a class="col-3">{{ $category->name }}</a>
                            <div class="offset-2 col-6">  
                                <a href="" class="btn btn-info">Ver Productos</a>
                            </div>
                        </div>     
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>


@endsection