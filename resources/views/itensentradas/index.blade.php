@extends('layouts.main')
@section('titulo','Lista de cliente')
@section('conteudo')
<h2>Listar Itens Entradas</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Preço Compra</th>
            <th scope="col">Quantidade</th>
            <th scope="col">ID Entrada</th>
            <th scope="col">ID Produto</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($itensentradas as $itensentrada)
        <tr>
            <th scope="row">{{$itensentrada->id}}</td>
            <td>{{$itensentrada->precocompra}}</td>
            <td>{{$itensentrada->quantidade}}</td>
            <td>{{$itensentrada->id_entrada}}</td>
            <td>{{$itensentrada->id_produto}}</td>

            <td>
                <a id= "aform" href="{{route('itensentrada.edit', [$itensentrada->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$itensentrada->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$itensentrada->id}}" action="{{route('itensentrada.destroy', [$itensentrada->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')