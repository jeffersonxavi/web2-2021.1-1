@extends('layouts.main')
@section('titulo','Lista de Itens Entrada')
@section('conteudo')
<h4>Visualizar Itens Venda</h4>
@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Preco: {{$itensentrada->preco}}</li>
    <li>Quantidade: {{$itensentrada->quantidade}}</li>
</ul>
@endforeach
@endsection('conteudo')