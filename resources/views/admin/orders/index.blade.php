@extends('app')

@section('content')
    <div class="container">
        <h2>Pedidos</h2>
        <br>
        <!--<a href="{{  route('admin.orders.create') }}" class="btn btn-primary">Novo Pedido</a>-->
        <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Total</th>
                <th>Data</th>
                <th>Produtos</th>
                <th>Entregador</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>#{{ $order->id }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <ul>
                    @foreach($order->items as $item)
                        <li>{{ $item->product->name }}</li>
                    @endforeach
                    </ul>
                </td>
                <td>
                    @if($order->deliveryman)
                        {{ $order->deliveryman->name }}
                    @else
                        --
                    @endif
                </td>
                <td>{{ $order->status }}</td>
                <td><a href="{{ route('admin.orders.edit',['id'=>$order->id]) }}" class="btn btn_sm btn-danger">Editar</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {!! $orders->render() !!}
    </div>
@endsection