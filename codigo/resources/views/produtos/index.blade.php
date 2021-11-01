@extends('layouts.main')
@section('titulo','Lista de produtos')
@section('conteudo')
<h4>Listar produtos</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <th scope="row">{{$produto->id}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>{{$produto->valor}}</td>
            <td>
            <a href="{{route('produto.edit', [$produto->id])}}">Editar</a>
            </td>
            <td>
            <form action="{{route('produto.destroy', [$produto->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="deletar">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')