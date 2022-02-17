@extends('layouts.main')
@section('titulo','Lista de vendas')
@section('conteudo')
<h2>Listar Vendas</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Valor Total</th>
            <th scope="col">Data</th>
            <th scope="col">Cliente</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vendas as $venda)
        <tr>
            <th scope="row">{{$venda->id}}</td>
            <td>{{$venda->valortotal}}</td>
            <td>{{$venda->data}}</td>
            <td>{{$venda->id_cliente}}</td>

            <td>
                <a id= "aform" href="{{route('venda.edit', [$venda->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$venda->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$venda->id}}" action="{{route('venda.destroy', [$venda->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')