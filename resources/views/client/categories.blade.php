@extends('layouts.app')

@section('content')

    <div class="offset-3 col-8 py-5 mt-5">
        <h1 class="pt-5">Listado de Categorias</h1>
        <div>
            <ul class="list-unstyled pt-5 mt-4">
                @foreach($categories as $category)
                    <li class="buttons-admin col-12">
                        <div class="d-flex justify-content-around">
                            <a class="col-3"> <h5>{{ ucfirst($category->name) }}</h5>   </a>
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