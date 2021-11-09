@extends('layouts.main')
@section('titulo','Lista de cliente')
@section('conteudo')
<h4>Listar Itens Entradas</h4>
@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Nome do itensentrada: {{$itensentrada->precocompra}};</li>
    <li>Endereço do itensentrada: {{$itensentrada->quantidade}};</li>
    <a href="{{route('itensentrada.edit', [$itensentrada->id])}}">Editar</a>
    <form action="{{route('itensentrada.destroy', [$itensentrada->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach
@endsection('conteudo')