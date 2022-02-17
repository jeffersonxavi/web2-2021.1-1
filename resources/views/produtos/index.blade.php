@extends('layouts.main')
@section('titulo','Lista de Produtos')
@section('conteudo')
<div class="row">
    <a href="{{route('produto.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>
<h2>Listar Produtos</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <th scope="row">{{$produto->id}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>{{$produto->valor}}</td>

            <td>
                <a id= "aform" href="{{route('produto.edit', [$produto->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$produto->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$produto->id}}" action="{{route('produto.destroy', [$produto->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')