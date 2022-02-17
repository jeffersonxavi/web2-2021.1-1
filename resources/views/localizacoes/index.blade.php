@extends('layouts.main')
@section('titulo','Lista de Localização')
@section('conteudo')

<div class="row">
    <a href="{{route('localizacao.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar Localização</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Departamento</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($localizacoes as $localizacao)
        <tr>
            <th scope="row">{{$localizacao->id}}</td>
            <td>{{$localizacao->departamento}}</td>

            <td>
                <a id= "aform" href="{{route('localizacao.edit', [$localizacao->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$localizacao->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$localizacao->id}}" action="{{route('localizacao.destroy', [$localizacao->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')