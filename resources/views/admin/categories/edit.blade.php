@extends('app')

@section('content')
    <div class="container">
        <h2>Editando Categoria: {{ $category->name }}</h2>
        <br>
        <a href="#" class="btn btn-primary">Nova Categoria</a>
        <br>

        @include('errors._check')


        {!! Form::model($category, ['route'=>['admin.categories.update', $category->id]]) !!}

        @include('admin.categories._form')

        <div class="form-group">
            {!! Form::submit('Editar Categoria',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection