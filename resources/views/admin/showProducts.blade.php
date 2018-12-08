@extends('layouts.app')

@section('content')

    <div class="offset-2 col-8">
        <h1>Listado de Productos</h1>
        <div>
            <ul class="dots">
                @foreach($products as $product)
                    <li class="buttons-admin">
                    <div class="d-flex justify-content-around">
                        <a href="/admin/{{ $product->id }}/showProduct">{{ $product->nombre }} $ {{ $product->precio }}.- {{ $product->stock }} unidades</a> 
                        <div class="d-flex justify-content-end col-5"> 
                            <a href="" class="btn btn-info">Ver Producto</a> 
                            <a href="/admin/{{ $product->id }}/editProduct" class="btn btn-info" role="button">Modificar</a>
                            <a href="" class="btn btn-info" role="button">Eliminar</a>
                        </div>
                    </div>     
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>

@endsection