@extends('layouts.main')
@section('titulo','Lista de Valvulas')
@section('conteudo')

<div class="row">
    <a href="{{route('valvula.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar valvula</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($valvulas as $valvula)
        <tr>
            <th scope="row">{{$valvula->id}}</td>
            <td>{{$valvula->quantidade}}</td>

            <td>
                <a id= "aform" href="{{route('valvula.edit', [$valvula->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$valvula->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$valvula->id}}" action="{{route('valvula.destroy', [$valvula->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')