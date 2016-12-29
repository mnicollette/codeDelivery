<div class="form-group">
    {!! Form::label('Name','Nome Cliente') !!}
    {!! Form::text('user[name]',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Email','E-mail Cliente') !!}
    {!! Form::text('user[email]',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Phone','Telefone') !!}
    {!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Address','Endereço') !!}
    {!! Form::textarea('address',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Cidade','Cidade') !!}
    {!! Form::text('city',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Estado','Estado') !!}
    {!! Form::text('state',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('CEP','CEP') !!}
    {!! Form::text('zipcode',null,['class'=>'form-control']) !!}
</div>