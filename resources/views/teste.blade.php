@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    {!! Form::open(['route'=>'oauth.access_token']) !!}

                    <div class="form-group">
                        {!! Form::label('Name','User') !!}
                        {!! Form::text('username','marcello@mpiza.com.br',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Name','password') !!}
                        {!! Form::text('password','123456',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Name','client_id') !!}
                        {!! Form::text('client_id','TEST_ENVIRONMENT',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Name','client_secret') !!}
                        {!! Form::text('client_secret','b17b0ec30dbb6e1726a17972afad008be6a3e4a5',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Name','grant_type') !!}
                        {!! Form::text('grant_type','password',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Cadastrar Categoria',['class'=>'btn btn-submit']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
