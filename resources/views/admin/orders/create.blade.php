@extends('app')

@section('content')
    <div class="container">
        <h2>Novo Pedido</h2>
        <br>
        <a href="#" class="btn btn-primary">Novo Pedido</a>
        <br>

        @include('errors._check')


        {!! Form::open(['route'=>'admin.orders.store']) !!}

        @include('admin.orders._form')

        <div class="form-group">
            {!! Form::submit('Cadastrar Pedido',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
