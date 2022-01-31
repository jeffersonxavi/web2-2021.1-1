@extends('layouts.main')
@section('titulo','Lista de vendas')
@section('conteudo')
<h4>Listar Vendas</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Valor Total</th>
            <th scope="col">Data</th>
            <th scope="col">Cliente</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vendas as $venda)
        <tr>
            <th scope="row">{{$venda->id}}</td>
            <td>{{$venda->valortotal}}</td>
            <td>{{$venda->data}}</td>
            <td>{{$venda->id_cliente}}</td>
            <td>
            <a href="{{route('venda.edit', [$venda->id])}}">Editar</a>
            </td>
            <td>
            <form action="{{route('venda.destroy', [$venda->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="deletar">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')