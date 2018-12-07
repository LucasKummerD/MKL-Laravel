@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-6 offset-3">
            <h2>Informacion del Producto</h2>            
            <hr>
            <h4>{{ $product->nombre }}</h4>
            <h6>{{ $product->descripcion }}</h6> 
            <h6>$ {{ $product->precio }} .-</h6> 
            <h6>{{ $product->stock }} Unidades</h6>
            <h6>{{ $product->category_id }}</h6>
            <hr>
        </div>
    </div>


@endsection