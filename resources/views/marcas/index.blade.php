@extends('layouts.main')
@section('titulo','Lista de Marcas')
@section('conteudo')

<div class="row">
    <a href="{{route('marca.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar Marca</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Marca</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marcas as $marca)
        <tr>
            <th scope="row">{{$marca->id}}</td>
            <td>{{$marca->marca}}</td>

            <td>
                <a id= "aform" href="{{route('marca.edit', [$marca->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$marca->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$marca->id}}" action="{{route('marca.destroy', [$marca->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')