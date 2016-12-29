@extends('app')

@section('content')
    <div class="container">
        <h2>Novo Cliente</h2>
        <br>
        <a href="#" class="btn btn-primary">Novo Cliente</a>
        <br>

        @include('errors._check')


        {!! Form::open(['route'=>'admin.clients.store']) !!}

        @include('admin.clients._form')

        <div class="form-group">
            {!! Form::submit('Cadastrar Cliente',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection