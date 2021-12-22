@extends('layouts.main')
@section('titulo','Lista de entrada')
@section('conteudo')
<h4>Visualizar entrada</h4>
@foreach ($entradas as $entrada)
<ul>
    <li>Nome do forncedor: {{$entrada->data}}</li>
    <li>Endereco do forncedor: {{$entrada->valortotal}}</li>
</ul>
@endforeach