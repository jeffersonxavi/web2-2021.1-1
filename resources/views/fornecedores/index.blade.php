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
                <a id= "aform" href="{{route('fornecedor.edit', [$fornecedor->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$fornecedor->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$fornecedor->id}}" action="{{route('fornecedor.destroy', [$fornecedor->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')