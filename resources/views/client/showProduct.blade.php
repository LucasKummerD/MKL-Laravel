@extends('layouts.masterClient')

@section('content')

    <div class="row">
        <div class="col-6 offset-3 mt-5 pt-5">
        
            <h2>Informacion del Producto</h2>            
        <hr>  
            <h6> <strong><ins>Nombre:</ins></strong> {{ $product->nombre }}</h6>
            <h6> <strong><ins>Descripción:</ins></strong> {{ $product->descripcion }}</h6> 
            <h6> <strong><ins>Precio:</ins></strong> ${{ $product->precio }}.-</h6> 
            <h6> <strong><ins>Stock:</ins></strong> {{ $product->stock }} Unidades</h6>
            <h6> <strong><ins>Categoria:</ins></strong> {{ $product->category_id }}</h6>
            <hr>
            <a href="" class="btn btn-info">Agregar al Carrito</a>
            <a href="" class="btn btn-info" role="button">Ver el Carrito</a>
        </div>
    </div>


@endsection

