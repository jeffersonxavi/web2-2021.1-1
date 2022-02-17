@extends('layouts.main')
@section('titulo','Lista de Clientes')
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
                <a id= "aform" href="{{route('cliente.edit', [$cliente->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$cliente->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$cliente->id}}" action="{{route('cliente.destroy', [$cliente->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')