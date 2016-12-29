@extends('app')

@section('content')
    <div class="container">
        <h2>Cupoms</h2>
        <br>
        <a href="{{  route('admin.cupoms.create') }}" class="btn btn-primary">Novo Cupom</a>
        <br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Código Cupom</th>
                <th>Valor Desconto</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cupoms as $cupom)
            <tr>
                <td>{{ $cupom->id }}</td>
                <td>{{ $cupom->code }}</td>
                <td>R$ {{ $cupom->value }}</td>
                <td><a href="{{ route('admin.cupoms.edit',['id'=>$cupom->id]) }}" class="btn btn_sm btn-danger">Editar</a>
                    <a href="{{ route('admin.cupoms.destroy',['id'=>$cupom->id]) }}" class="btn btn_sm btn-danger">Deletar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {!! $cupoms->render() !!}
    </div>
@endsection