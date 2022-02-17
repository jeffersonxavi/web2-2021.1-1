@extends('layouts.main')
@section('titulo','Lista Itens Venda')
@section('conteudo')
<h2>Listar Itens Vendas</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">ID Venda</th>
            <th scope="col">ID Produto</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($itensvendas as $itensvenda)
        <tr>
            <th scope="row">{{$itensvenda->id}}</td>
            <td>{{$itensvenda->preco}}</td>
            <td>{{$itensvenda->quantidade}}</td>
            <td>{{$itensvenda->id_venda}}</td>
            <td>{{$itensvenda->id_produto}}</td>
  
            <td>
                <a id= "aform" href="{{route('itensvenda.edit', [$itensvenda->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$itensvenda->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$itensvenda->id}}" action="{{route('itensvenda.destroy', [$itensvenda->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')