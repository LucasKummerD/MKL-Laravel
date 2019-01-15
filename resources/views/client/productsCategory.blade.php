@extends('layouts.app')

@section('content')

    <div class="beto offset-1 col-9">
        <h2 class="text-center pb-5 text-capitalize">Categoria: {{ $category->name }}</h2>
        <ul class="list-unstyled px-5 offset-1 col-12">
            @foreach($product as $product)
                @if($product->category_id == $category->id)
                <li>
                <div class="d-flex justify-content-around">
                    <h5 class="offset-1 col-5 pt-3">{{ $product->nombre }}</h5>
                    <div class="offset-3 col-4">
                        <a href="/{{$product->id}}/showProduct" class="btn btn-info col-3">Ver</a> 
                        <a href="" class="btn btn-success col-5">Agregar a Carrito</a>
                    </div>
                </div>
                </li>
                @endif
                <hr>
            @endforeach
        </ul>
    </div>
    
@endsection