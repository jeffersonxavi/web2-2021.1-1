@extends('layouts.main')
@section('titulo','Lista de Motores')
@section('conteudo')

<div class="row">
    <a href="{{route('motor.create')}}" class="btn btn-outline-info btn-rounded waves-effect">+</a>
</div>

<h2>Listar motor</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Potencia</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($motors as $motor)
        <tr>
            <th scope="row">{{$motor->id}}</td>
            <td>{{$motor->potencia}}</td>

            <td>
                <a id= "aform" href="{{route('motor.edit', [$motor->id])}} " class="btn btn-primary">EDITAR</a>

                <a  id= "aform" class="btn btn-secondary" onclick="
                var result = confirm('Você tem certeza que deseja excluir?');
                
                if(result){
                    event.preventDefault();
                    document.getElementById('delete-form-{{$motor->id}}').submit();
                }">
                    DELETE
                </a>

                <form  method="POST" id="delete-form-{{$motor->id}}" action="{{route('motor.destroy', [$motor->id])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')