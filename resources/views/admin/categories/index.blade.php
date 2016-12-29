@extends('app')

@section('content')
    <div class="container">
        <h2>Categorias</h2>
        <br>
        <a href="{{  route('admin.categories.create') }}" class="btn btn-primary">Nova Categoria</a>
        <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td><a href="{{ route('admin.categories.edit',['id'=>$category->id]) }}" class="btn btn_sm btn-danger">Editar</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {!! $categories->render() !!}
    </div>
@endsection