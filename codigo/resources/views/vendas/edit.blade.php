@extends('layouts.main')
@section('titulo','Editar venda')
@section('conteudo')
<h4>Editar Venda</h4>
<div id="form">
    <form action="{{route('venda.update', [$venda->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
                <div class="col">
                    <label for="data">Data</label>
                    <input type="date" class="form-control" placeholder="Data" name="data" id="data" value="{{$venda->data}}">
                </div>
                <div class="col">
                    <label for="valortotal">Valor Total</label>
                    <input type="text" class="form-control" placeholder="Total" name="valortotal" id="valortotal" value="{{$venda->valortotal}}">
                </div>
            </div>
            <p><p><input class="btn btn-secondary active" type="submit" value="salvar"></p>
</div>
@endsection('conteudo')