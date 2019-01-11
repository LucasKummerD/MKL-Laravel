@extends('layouts.app')

@section('content')

    @if(Auth::user()->role == 'admin')

        <div class="offset-2 col-8 py-5">
            <div class="offset-3">
            <h1 class="d-inline-block">Listado de Productos</h1>
            <a href="/create"><i class="fas fa-plus d-inline-block px-5 fa-3x" style="color:lightgreen" title="Agregar Producto"></i></a>
            </div>
            <div class="pt-5">
                <ul class="list-unstyled">
                    @foreach($products as $product)
                        <li class="buttons-admin">
                        <div class="d-flex justify-content-around">
                            <a class="offset-3 col-5 pt-3">{{ $product->nombre }} ${{ $product->precio }}.- {{ $product->stock }} unidades</a> 
                            <div class="offset-2 col-8">  
                                <a href="/{{ $product->id }}/showProduct" class="btn btn-info col-3" role="button">Ver Producto</a>
                                <a href="/{{ $product->id }}/editProduct" class="btn btn-info col-3" role="button">Editar Producto</a>
                                <a href="" class="btn btn-danger col-3" role="button">Eliminar Producto</a>
                            </div>
                        </div>     
                        </li>
                        <hr>
                    @endforeach
                </ul>
            </div>
            {!! $products->render() !!}
        </div>

    @else

        <div class="offset-2 col-8 py-5">
            <h1 class="text-center">Listado de Productos</h1>
            <div>
                <ul class="list-unstyled">
                    @foreach($products as $product)
                        <li class="buttons-admin">
                        <div class="d-flex justify-content-around">
                            <a class="offset-3 col-5">{{ $product->nombre }} ${{ $product->precio }}.- {{ $product->stock }} unidades</a> 
                            <div class="offset-2 col-6">                                  
                                <a href="/{{ $product->id }}/showProduct" class="btn btn-info col-3" role="button">Ver Producto</a>
                                <a href="" class="btn btn-success col-4">Agregar al Carrito</a>
                            </div>
                        </div>     
                        </li>
                        <hr>
                    @endforeach
                </ul>
            </div>
            <div>
            {!! $products->render() !!}
            </div>
        </div>

    @endif

@endsection