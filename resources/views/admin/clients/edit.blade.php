@extends('app')

@section('content')
    <div class="container">
        <h2>Editando Cliente: {{ $client->user->name }}</h2>
        <br>
        <a href="#" class="btn btn-primary">Novo Cliente</a>
        <br>

        @include('errors._check')


        {!! Form::model($client, ['route'=>['admin.clients.update', $client->id]]) !!}

        @include('admin.clients._form')

        <div class="form-group">
            {!! Form::submit('Editar Cliente',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection