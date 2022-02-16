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
                <a href="{{route('fabricacao.edit', [$fabricacao->id])}} "><input class="btn btn-danger btn-sm" value="EDITAR"></a>
            </td>
            <td>
                <form action="{{route('fabricacao.destroy', [$fabricacao->id])}}" method="POST">
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