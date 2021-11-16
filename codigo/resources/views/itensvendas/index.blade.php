@extends('layouts.main')
@section('titulo','Lista Itens Venda')
@section('conteudo')
<h4>Listar Itens Vendas</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">ID Venda</th>
            <th scope="col">ID Produto</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($itensvendas as $itensvenda)
        <tr>
            <th scope="row">{{$itensvenda->id}}</td>
            <td>{{$itensvenda->preco}}</td>
            <td>{{$itensvenda->quantidade}}</td>
            <td>{{$itensvenda->id_venda}}</td>
            <td>{{$itensvenda->id_produto}}</td>
            <td>
            <a href="{{route('itensvenda.edit', [$itensvenda->id])}}">Editar</a>
            </td>
            <td>
            <form action="{{route('itensvenda.destroy', [$itensvenda->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="deletar">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')