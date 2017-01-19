@extends('app')

@section('content')
    <div class="container">
        <h2>Meus Pedidos</h2>
        <br>

        <br>
        <a href="{{  route('customer.order.create') }}" class="btn btn-primary">Novo Pedido</a>
        <br>
        <br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <td>Id</td>
                <td>Total</td>
                <td>Status</td>
                <td>Data</td>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->total}}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
