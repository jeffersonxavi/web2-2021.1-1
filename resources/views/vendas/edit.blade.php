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
                <input type="date" class="form-control @error('data') is-invalid @enderror" placeholder="Data" name="data" id="data" value="{{$venda->data}}">
                @error('data')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="valortotal">Valor Total</label>
                <input type="text" class="form-control @error('valortotal') is-invalid @enderror" placeholder="Total" name="valortotal" id="valortotal" value="{{$venda->valortotal}}">
                @error('valortotal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <p>
        <p><input class="btn btn-secondary active" type="submit" value="Salvar"></p>
</div>
@endsection('conteudo')