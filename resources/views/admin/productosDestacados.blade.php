@extends('layouts.app')

@section('content')

    @if(Auth::user()->role == 'admin')

        <div class="offset-2 col-8 py-5">
            <div class="offset-4">
                <h1 class="d-inline-block">Listado de Productos</h1>
            </div>
            <div class="py-5">
                <ul class="list-unstyled">
                    @foreach($products as $product)
                        <li class="buttons-admin">
                        <div class="d-flex justify-content-around">
                            <a class="offset-1 col-5 pt-3">{{ $product->nombre }} ${{ $product->precio }}.- {{ $product->stock }} unidades</a>
                        
                            <input class="offset-3" type="checkbox" name="" value=""><br> 
                        </div>     
                        </li>
                        <hr>
                    @endforeach
                </ul>
                <a href="" class="btn btn-success offset-9 col-2">Guardar</a>    
        </div>
    @endif
@endsection