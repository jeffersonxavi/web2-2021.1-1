@extends('layouts.main')
@section('titulo','Lista de cliente')
@section('conteudo')
<h4>Listar Itens Entradas</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Preço Compra</th>
            <th scope="col">Quantidade</th>
            <th scope="col">ID Entrada</th>
            <th scope="col">ID Produto</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($itensentradas as $itensentrada)
        <tr>
            <th scope="row">{{$itensentrada->id}}</td>
            <td>{{$itensentrada->precocompra}}</td>
            <td>{{$itensentrada->quantidade}}</td>
            <td>{{$itensentrada->id_entrada}}</td>
            <td>{{$itensentrada->id_produto}}</td>
            <td>
            <a href="{{route('itensentrada.edit', [$itensentrada->id])}}">Editar</a>
            </td>
            <td>
            <form action="{{route('itensentrada.destroy', [$itensentrada->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="deletar">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')