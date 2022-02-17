@extends('layouts.main')
@section('titulo','Lista de Categorias')
@section('conteudo')

<div class="row">
    <a href="{{route('categoria.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar Categoria</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
            <th scope="row">{{$categoria->id}}</td>
            <td>{{$categoria->categoria}}</td>

            <td>
                <a id= "aform" href="{{route('categoria.edit', [$categoria->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$categoria->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$categoria->id}}" action="{{route('categoria.destroy', [$categoria->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')