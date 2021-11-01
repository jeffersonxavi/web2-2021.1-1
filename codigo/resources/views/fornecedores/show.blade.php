@extends('layouts.main')
@section('titulo','Edição de fornecedores')
@section('conteudo')
<h4>Consultar Fornecedores</h4>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fornecedores as $fornecedor)
        <tr>
            <th scope="row">{{$fornecedor->id}}</td>
            <td>{{$fornecedor->nome}}</td>
            <td>{{$fornecedor->endereco}}</td>
            <td>{{$fornecedor->email}}</td>
            <td>
            <a href="edit/{{$fornecedor->id}}">Editar</a>
            </td>
            <td>
            <form action="../fornecedores/{{$fornecedor->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="deletar">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')
