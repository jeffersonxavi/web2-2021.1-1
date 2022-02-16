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
                <a href="{{route('motor.edit', [$motor->id])}} "><input class="btn btn-danger btn-sm" value="EDITAR"></a>
            </td>
            <td>
                <form action="{{route('motor.destroy', [$motor->id])}}" method="POST">
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