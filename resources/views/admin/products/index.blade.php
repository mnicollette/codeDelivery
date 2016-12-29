@extends('app')

@section('content')
    <div class="container">
        <h2>Produtos</h2>
        <br>
        <a href="{{  route('admin.products.create') }}" class="btn btn-primary">Novo Produto</a>
        <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->price }}</td>
                <td><a href="{{ route('admin.products.edit',['id'=>$product->id]) }}" class="btn btn_sm btn-danger">Editar</a>
                    <a href="{{ route('admin.products.destroy',['id'=>$product->id]) }}" class="btn btn_sm btn-primary">Deletar</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {!! $products->render() !!}
    </div>
@endsection