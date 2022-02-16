@extends('layouts.main')
@section('titulo','Lista de Marcas')
@section('conteudo')

<div class="row">
    <a href="{{route('marca.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar Marca</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Marca</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marcas as $marca)
        <tr>
            <th scope="row">{{$marca->id}}</td>
            <td>{{$marca->marca}}</td>
            <td>
                <a href="{{route('marca.edit', [$marca->id])}} "><input class="btn btn-danger btn-sm" value="EDITAR"></a>
            </td>
            <td>
                <form action="{{route('marca.destroy', [$marca->id])}}" method="POST">
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