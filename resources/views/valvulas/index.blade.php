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
                <a href="{{route('valvula.edit', [$valvula->id])}} "><input class="btn btn-danger btn-sm" value="EDITAR"></a>
            </td>
            <td>
                <form action="{{route('valvula.destroy', [$valvula->id])}}" method="POST">
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