@extends('layouts.app')

@section('content')

    <div class="container text-center py-5">
        <div class="page-header">
            <h1>Carrito de Compras</h1>
        </div>
        <hr>
        <div class="card-body">
            @if(count($cart))
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cart as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>${{ number_format($item->precio, 2) }}.-</td>
                                <td>
                                    <input 
                                        type="number" 
                                        min="1" 
                                        max="100" 
                                        value="{{ $item->cantidad }}"
                                        id="product_{{ $item->id }}"
                                    >
                                    <a 
                                        href="#" 
                                        class="btn btn-warning btn-update-item col-2" 
                                        data-href="/cart/{{ $item->id }}/{cantidad}/update" 
                                        data-id="{{ $item->id }}"
                                    >
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </td>
                                <td>${{ number_format($item->precio * $item->cantidad, 2) }}</td>
                                <td>
                                    <a href="/cart/{{ $item->id }}/delete" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <hr>
                    <div class="label label-success"><h4>Monto a Pagar: ${{ number_format($total,2) }}</h4></div>               
            </div>
            @else
            <h4 class="label label-warning"><strong> No hay productos en el carrito!! </strong></h4>
            @endif
            <hr>
            <a class="btn btn-primary col-3" href="/showProducts">{{__('Regresar')}}</a>
            <a class="btn btn-primary col-3 m-2" href="/order">{{__('Comprar')}}</a>
        </div>
    </div>

@endsection