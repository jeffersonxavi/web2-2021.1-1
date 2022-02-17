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
                <a id= "aform" href="{{route('entrada.edit', [$entrada->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$entrada->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$entrada->id}}" action="{{route('entrada.destroy', [$entrada->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')