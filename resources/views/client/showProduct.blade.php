@extends('layouts.app')

@section('content')

    @if (Auth::user()->role == 'admin')

    <div class="row py-3">
        <div class="col-6 offset-3">
        
            <h2 class="pt-5 text-center">Informacion del Producto</h2>                
        <hr>
            <div>
                <img width="250" height="250" src="/storage/{{$product->image }}" alt="">
            </div>
            <div>
                <h6> <strong><ins>Nombre:</ins></strong> {{ $product->nombre }}</h6>
                <h6> <strong><ins>Descripción:</ins></strong> {{ $product->descripcion }}</h6> 
                <h6> <strong><ins>Precio:</ins></strong> ${{ $product->precio }}.-</h6> 
                <h6> <strong><ins>Stock:</ins></strong> {{ $product->stock }} Unidades</h6>
                <h6> <strong><ins>Categoria:</ins></strong> {{ $product->category_id }}</h6>
            </div>
        <hr>
            <a href="/showProducts" class="btn btn-info offset-4 col-4" role="button">Volver a Productos</a>
        </div>
    </div>

    @else
    
    <div class="row py-3">
        <div class="col-6 offset-3">
        
            <h2 class="pt-5 text-center">Informacion del Producto</h2>                
        <hr>
            <div class="d-inline-block">
                <img width="250" height="250" src="/storage/{{$product->image }}" alt="">
            </div>
            <div class="pull-right mt-5">
                <h6> <strong><ins>Nombre:</ins></strong> {{ $product->nombre }}</h6>
                <h6> <strong><ins>Descripción:</ins></strong> {{ $product->descripcion }}</h6> 
                <h6> <strong><ins>Precio:</ins></strong> ${{ $product->precio }}.-</h6> 
                <h6> <strong><ins>Stock:</ins></strong> {{ $product->stock }} Unidades</h6>
                <h6> <strong><ins>Categoria:</ins></strong> {{ $product->category_id }}</h6>
            </div>
        <hr>
            <div class="d-inline-block offset-2 col-9">
                <a href="/cart/{{ $product->id }}/add" class="btn btn-success col-4">Agregar al Carrito</a>
                <a href="/categories/{{ $category->id }}/productsCategory" class="btn btn-info col-3" role="button">Ir a Linea</a>
                <a href="/showProducts" class="btn btn-info col-4" role="button">Ir a Productos</a>
            </div>
        </div>
    </div>

    @endif


@endsection

