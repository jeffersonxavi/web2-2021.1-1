@extends('layouts.main')
@section('titulo','Lista de Categorias')
@section('conteudo')

<div class="row">
    <a href="{{route('categoria.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar Categoria</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
            <th scope="row">{{$categoria->id}}</td>
            <td>{{$categoria->categoria}}</td>
            <td>
                <a href="{{route('categoria.edit', [$categoria->id])}} "><input class="btn btn-danger btn-sm" value="EDITAR"></a>
            </td>
            <td>
                <form action="{{route('categoria.destroy', [$categoria->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-secondary btn-sm" value="DELETAR">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')