@extends('layouts.app')

@section('content')

    <div class="container text-center pt-4">
        <div class="card">
            <h1>Detalles de la Compra</h1>
        </div>

        <div class="cart-body">
            <div class="table-responsive py-2">
                <h3>Datos del Cliente</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr><td>Nombre: </td><td>{{ Auth::user()->name }}</td></tr>
                    <tr><td>E-mail: </td><td>{{ Auth::user()->email }}</td></tr>
                    <tr><td>Direccion de Entrega: </td><td>{{ Auth::user()->direccion_de_entrega }}</td></tr>
                    <tr><td>Codigo Postal: </td><td>{{ Auth::user()->codigo_postal }}</td></tr>
                    <tr><td>CUIT: </td><td>{{ Auth::user()->cuit }}</td></tr>
                    <tr><td>Teléfono: </td><td>{{ Auth::user()->telefono }}</td></tr>
                </table>
            </div>

            <div class="table-responsive">
                <h3>Datos de la Compra</h3>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>

                    @foreach($cart as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ number_format($item->precio, 2) }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>{{ number_format($item->precio * $item->cantidad, 2) }}</td>
                    </tr>
                    @endforeach
                </table>
                <hr>
                <h3>Monto total: $ {{ number_format($total, 2) }} .-</h3>
                <hr>
            </div>
            <a class="btn btn-success" href="/home">Pagar</a>
        </div>
    </div>

@endsection