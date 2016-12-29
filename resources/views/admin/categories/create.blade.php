@extends('app')

@section('content')
    <div class="container">
        <h2>Nova Categorias</h2>
        <br>
        <a href="#" class="btn btn-primary">Nova Categoria</a>
        <br>

        @include('errors._check')


        {!! Form::open(['route'=>'admin.categories.store']) !!}

        @include('admin.categories._form')

        <div class="form-group">
            {!! Form::submit('Cadastrar Categoria',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection