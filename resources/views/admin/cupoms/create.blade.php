@extends('app')

@section('content')
    <div class="container">
        <h2>Novo Cupom</h2>
        <br>

        <br>

        @include('errors._check')


        {!! Form::open(['route'=>'admin.cupoms.store']) !!}

        @include('admin.cupoms._form')

        <div class="form-group">
            {!! Form::submit('Cadastrar Cupom',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection