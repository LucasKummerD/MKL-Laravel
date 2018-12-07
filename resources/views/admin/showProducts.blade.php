@extends('layouts.masterAdmin')

@section('content')

    <div class="offset-2 col-8 mt-5">
        <h1>Listado de Productos</h1>
        <div>
            <ul>
                @foreach($products as $product)
                    <li class="buttons-admin">
                    <div class="d-flex justify-content-start">
                        <a href="/admin/{{ $product->id }}/showProduct">{{ $product->nombre }} $ {{ $product->precio }}.- {{ $product->stock }} unidades</a> 
                        <div class="d-flex justify-content-end">  
                            <a href="/admin/{{ $product->id }}/editProduct" class="btn btn-info" role="button">Modificar</a>
                            <a href="" class="btn btn-info" role="button">Eliminar</a>
                        </div>
                    </div>     
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection