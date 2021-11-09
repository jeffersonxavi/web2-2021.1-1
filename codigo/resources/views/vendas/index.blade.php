@extends('layouts.main')
@section('titulo','Lista de vendas')
@section('conteudo')
<h4>Listar Vendas</h4>
@foreach ($vendas as $venda)
<ul>
    <li>Nome do venda: {{$venda->data}};</li>
    <li>Endereço do venda: {{$venda->valortotal}};</li>
    <a href="{{route('venda.edit', [$venda->id])}}">Editar</a>
    <form action="{{route('venda.destroy', [$venda->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach
@endsection('conteudo')