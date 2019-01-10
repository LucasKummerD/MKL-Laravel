@extends('layouts.app')

@section('content')

    <div class="beto offset-1 col-9">
        <h2 class="text-center pb-5">{{ $category->name }}</h2>
        <ul class="list-unstyled px-5 offset-1 col-12">
            @foreach($category->products as $product)
                <li>
                <div class="d-flex justify-content-around">
                    <h5 class="offset-2 col-5">{{ $product->nombre }}</h5>
                    <div class="offset-4 col-4">
                        <a href="" class="btn btn-info">Ver</a> 
                        <a href="" class="btn btn-info">Agregar a Carrito</a>
                    </div>
                </div>
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
    
@endsection