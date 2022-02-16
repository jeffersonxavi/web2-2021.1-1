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
                <a href="{{route('localizacao.edit', [$localizacao->id])}} "><input class="btn btn-danger btn-sm" value="EDITAR"></a>
            </td>
            <td>
                <form action="{{route('localizacao.destroy', [$localizacao->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-secondary btn-sm" value="DELETAR">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection('conteudo')