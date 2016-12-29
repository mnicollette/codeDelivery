@extends('app')

@section('content')
    <div class="container">
        <h2>Editando Pedido: #{{ $order->id }}</h2>
        <h3>Cliente: {{ $order->client->user->name }}</h3>
        <h4>Data Pedido: #{{ $order->created_at }}</h4>
        <p>Entregar em:<br>
        {{ $order->client->address }}
        </p>

        <br>
        <br>


        @include('errors._check')


        {!! Form::model($order, ['route'=>['admin.orders.update', $order->id]]) !!}

        @include('admin.orders._form')

        <div class="form-group">
            {!! Form::submit('Editar Pedido',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection