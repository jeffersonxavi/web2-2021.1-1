@extends('layouts.main')
@section('titulo','cadastro de produtos')
@section('conteudo')
<h4>Visualizar Venda</h4>
@foreach ($vendas as $venda)
<ul>
    <li>data: {{$venda->data}}</li>
    <li>venda: {{$venda->valortotal}}</li>
</ul>
@endforeach
@endsection