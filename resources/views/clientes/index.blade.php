@extends('layouts.main')
@section('titulo','Lista de clientes')
@section('conteudo')
<div class="row">
    <a href="{{route('cliente.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar Clientes</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Debito</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <th scope="row">{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->debito}}</td>
            <td>
                <a href="{{route('cliente.edit', [$cliente->id])}} ">Editar</a>
            </td>
            <td>
                <form action="{{route('cliente.destroy', [$cliente->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="deletar">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')