@extends('layouts.main')
@section('titulo','Lista de Modelos')
@section('conteudo')

<div class="row">
    <a href="{{route('carro.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar carro</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Modelo</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carros as $carro)
        <tr>
            <th scope="row">{{$carro->id}}</td>
            <td>{{$carro->modelo}}</td>

            <td>
                <a id= "aform" href="{{route('carro.edit', [$carro->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$carro->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$carro->id}}" action="{{route('carro.destroy', [$carro->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')