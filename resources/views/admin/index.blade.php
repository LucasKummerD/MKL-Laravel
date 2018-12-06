@extends('layouts.masterAdmin')

@section('content')

    <div class="offset-2 col-8">
        <h1>Listado de Productos</h1>
        <div>
            <ul>
                @foreach($products as $product)
                    <li class="buttons-admin">
                    <div class="d-flex justify-content-end">
                        <a href="/admin/{id}/show">{{ $product->nombre }} $ {{ $product->precio }}.- {{ $product->stock }} unidades</a>   
                        <button type="submit" class="btn btn-info">Modificar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>     
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection