@extends('layouts.main')
@section('titulo','Lista de cliente')
@section('conteudo')
<h4>Visualizar Itens Entrada</h4>
@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Preco unidade: {{$itensentrada->precocompra}}</li>
    <li>Quantidade: {{$itensentrada->quantidade}}</li>
</ul>
@endforeach
@endsection('conteudo')