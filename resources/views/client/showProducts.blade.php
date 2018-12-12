@extends('layouts.app')

@section('content')

    <div class="offset-2 col-8 py-5">
        <h1 class="pt-5 text-center">Listado de Productos</h1>
        <div>
            <ul class="list-unstyled">
                @foreach($products as $product)
                    <li class="buttons-admin">
                    <div class="d-flex justify-content-around">
                        <a class="offset-3 col-5">{{ $product->nombre }} $ {{ $product->precio }}.- {{ $product->stock }} unidades</a> 
                        <div class="offset-2 col-6">  
                            <a href="" class="btn btn-info">Agregar al Carrito</a>
                            <a href="/client/{{ $product->id }}/showProduct" class="btn btn-info" role="button">Ver Producto</a>
                        </div>
                    </div>     
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>

@endsection