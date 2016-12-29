@extends('app')

@section('content')
    <div class="container">
        <h2>Editando Produto: {{ $product->name }}</h2>
        <br>
        <a href="#" class="btn btn-primary">Novo Produto</a>
        <br>
        <br>

        @include('errors._check')


        {!! Form::model($product, ['route'=>['admin.products.update', $product->id]]) !!}

        @include('admin.products._form')

        <div class="form-group">
            {!! Form::submit('Editar Produto',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection