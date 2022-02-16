@extends('layouts.main')
@section('titulo','Lista de entradas')
@section('conteudo')
<h2>Listar Entradas</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Valor Total</th>
            <th scope="col">Data</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entradas as $entrada)
        <tr>
            <th scope="row">{{$entrada->id}}</td>
            <td>{{$entrada->valortotal}}</td>
            <td>{{$entrada->data}}</td>
            <td>
            <a href="{{route('entrada.edit', [$entrada->id])}}">Editar</a>
            </td>
            <td>
            <form action="{{route('entrada.destroy', [$entrada->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="deletar">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')