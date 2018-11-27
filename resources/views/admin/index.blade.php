@extends('layouts.master')

@section('content')

    <div class="offset-2 col-6">
        <h1>Listado de Productos</h1>
        <ul>
            @foreach($producto as $producto)
            <li>
                <a href="#">{{ $producto->nombre }}, {{ $producto->descripcion }}, {{ $producto->precio }}, {{   $producto->stock }}
                    <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Modificar</button>
                    <button type="submit" class="btn btn-lg btn-block bg-purple font-white">Eliminar</button>
                </a>
            </li>
            @endforeach
        </ul>
    </div>

@endsection