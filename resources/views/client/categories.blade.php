@extends('layouts.app')

@section('content')

    <div class="offset-2 col-8">
        <h1 class="py-5 text-center">Listado de Categorias</h1>
        <div>
            <ul class="list-unstyled pt-4">
                @foreach($categories as $category)
                    <li class="buttons-admin col-12">
                        <div class="d-flex justify-content-around">
                            <a class="offset-1 col-3 pt-2"> <h5>{{ ucfirst($category->name) }}</h5></a>
                            <div class="offset-2 col-6">  
                                <a href="/categories/{{ $category->id }}/productsCategory" class="btn btn-info offset-5 col-4">Ver Productos</a>
                            </div>
                        </div>     
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
