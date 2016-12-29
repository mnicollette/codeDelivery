@extends('app')

@section('content')
    <div class="container">
        <h2>Novo Produto</h2>
        <br>

        <br>

        @include('errors._check')


        {!! Form::open(['route'=>'admin.products.store']) !!}

        @include('admin.products._form')

        <div class="form-group">
            {!! Form::submit('Cadastrar Produto',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection