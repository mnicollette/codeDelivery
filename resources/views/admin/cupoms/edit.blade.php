@extends('app')

@section('content')
    <div class="container">
        <h2>Editando Cupom: {{ $cupom->code }}</h2>
        <br>

        <br>

        @include('errors._check')


        {!! Form::model($cupom, ['route'=>['admin.cupoms.update', $cupom->id]]) !!}

        @include('admin.cupoms._form')

        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection