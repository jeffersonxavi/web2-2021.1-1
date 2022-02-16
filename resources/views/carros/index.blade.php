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
                <a href="{{route('carro.edit', [$carro->id])}} "><input class="btn btn-danger btn-sm" value="EDITAR"></a>
            </td>
            <td>
                <form action="{{route('carro.destroy', [$carro->id])}}" method="POST">
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