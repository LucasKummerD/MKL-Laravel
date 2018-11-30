@extends('layouts.masterAdmin')

@section('content')

    <div class="offset-2 col-6">
        <h1>Listado de Productos</h1>
        <ul>
            @foreach($products as $product)
            <li>
                <a href="#">{{ $product->nombre }}, {{ $product->descripcion }}, {{ $product->precio }}, {{   $product->stock }}
                    <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Modificar</button>
                    <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Eliminar</button>
                </a>
            </li>
            @endforeach
        </ul>
    </div>

@endsection