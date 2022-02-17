@extends('layouts.main')
@section('titulo','Lista de Fabriacação')
@section('conteudo')

<div class="row">
    <a href="{{route('fabricacao.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar fabricacao</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fabricação</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fabricacoes as $fabricacao)
        <tr>
            <th scope="row">{{$fabricacao->id}}</td>
            <td>{{$fabricacao->ano}}</td>

            <td>
                <a id= "aform" href="{{route('fabricacao.edit', [$fabricacao->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$fabricacao->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$fabricacao->id}}" action="{{route('fabricacao.destroy', [$fabricacao->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')