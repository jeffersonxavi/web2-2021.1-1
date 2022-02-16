@extends('layouts.main')
@section('titulo','Lista de cliente')
@section('conteudo')
<h4>Visualizar Cliente</h4>
@foreach ($clientes as $cliente)
<ul>
    <li>Nome do cliente: {{$cliente->nome}}</li>
    <li>Endereco do cliente: {{$cliente->endereco}}</li>
    <li>Debito do cliente: {{$cliente->debito}}</li>
</ul>
@endforeach
