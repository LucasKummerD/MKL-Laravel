@extends('layouts.app')

@section('content')

    @if(Auth::user()->role == 'admin')

        <div class="offset-2 col-8 py-5">
            <div class="offset-3">
                <h1 class="d-inline-block">Listado de Productos</h1>
                <a href="/create"><i class="fas fa-plus-circle d-inline-block pl-5 fa-2x text-center" style="color:lightgreen" title="Nuevo Producto"><h5>Nuevo Producto</h5></i></a>
                <a href="/productosDestacados"><i class="fas fa-edit d-inline-block pl-4 fa-2x text-center" style="color:blue" title="Editar Productos Destacados"><h5>Productos Destacados</h5></i></a>
                
                <form class="navbar-form pb-4 pt-3" method="GET" action="">
                    <div class="form-inline">
                        <input type="text" class="form-control mr-2" name="nombre" id="search" placeholder="Nombre del Producto">
                        <button class="btn btn-secondary col-2" type="submit">Buscar</button>
                    </div>     
                </form>

            </div>
            <div class="py-5">
                <ul class="list-unstyled">
                    @forelse($products as $product)
                        <li class="buttons-admin">
                        <div class="d-flex justify-content-around">
                            <img src="/storage/{{ $product->image }}" alt="" width="50px">
                            <a class="offset-3 col-5 pt-3">{{ $product->nombre }} ${{ $product->precio }}.- {{ $product->stock }} unidades</a>
                            <input type="checkbox" name="" value=""><br> 
                            <div class="offset-2 col-8">  
                                <a href="/{{ $product->id }}/showProduct" class="btn btn-info col-3" role="button">Ver Producto</a>
                                <a href="/{{ $product->id }}/editProduct" class="btn btn-info col-3" role="button">Editar Producto</a>
                                <a href="/{{ $product->id }}/delete" class="btn btn-danger col-3" role="button">Eliminar Producto</a>
                            </div>
                        </div>     
                        </li>
                        <hr>
                    @empty
                        <h4>No se encuentran resultado para su Búsqueda.</h4>
                    @endforelse
                </ul>

            </div>
                <div class="justify-content-center">
                    {!! $products->render() !!}
                </div>    
        </div>

    @else

        <div class="offset-2 col-8 py-5">
            <h1 class="text-center">Listado de Productos</h1>
            <div>
                <ul class="list-unstyled">
                    @forelse($products as $product)
                        <li class="buttons-admin">
                        <div class="d-flex justify-content-around">
                            <img src="/storage/{{ $product->image }}" alt="" width="50px">
                            <a class="offset-3 col-5">{{ $product->nombre }} ${{ $product->precio }}.- {{ $product->stock }} unidades</a> 
                        <div class="offset-2 col-6">                                  
                                <a href="/{{ $product->id }}/showProduct" class="btn btn-info col-3" role="button">Ver Producto</a>
                                <a href="/cart/{{ $product->id }}/add" class="btn btn-success col-4">Agregar al Carrito</a>
                            </div>
                        </div>     
                        </li>
                        <hr>
                    @empty
                        <h4>No se encuentran resultado para su Búsqueda.</h4>
                    @endforelse
                </ul>
            </div>
            <div>
            {!! $products->render() !!}
            </div>
        </div>

    @endif

@endsection