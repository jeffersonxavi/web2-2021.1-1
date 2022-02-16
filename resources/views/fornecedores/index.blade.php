@extends('layouts.main')
@section('titulo','Lista de Fornecedores')
@section('conteudo')
<div class="row">
    <a href="{{route('fornecedor.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>
<h2>Listar Fornecedores</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fornecedores as $fornecedor)
        <tr>
            <th scope="row">{{$fornecedor->id}}</td>
            <td>{{$fornecedor->nome}}</td>
            <td>{{$fornecedor->cnpj}}</td>
            <td>{{$fornecedor->endereco}}</td>
            <td>
                <a href="{{route('fornecedor.edit', [$fornecedor->id])}} "><input class="btn btn-danger btn-sm" value="EDITAR"></a>
            </td>
            <td>
                <form action="{{route('fornecedor.destroy', [$fornecedor->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-secondary btn-sm" value="DELETAR">
                </form>
            </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')