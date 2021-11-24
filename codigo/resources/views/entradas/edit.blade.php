@extends('layouts.main')
@section('titulo','Editar Entrada')
@section('conteudo')
<h4>Editar Entrada</h4>
<div id="form">
    <form action="{{route('entrada.update', [$entrada->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Data entrada</label>
        <input type="text" class="form-control @error('data') is-invalid @enderror" name="data" id="data" value="{{$entrada->data}}">
        @error('data')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <p><label for="">Valor total da entrada</label>
            <input type="text" class="form-control @error('valortotal') is-invalid @enderror" name="valortotal" id="valortotal" value="{{$entrada->valortotal}}">
            @error('valortotal')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <p><input class="btn btn-secondary active" type="submit" value="Salvar"></p>
    </form>
</div>
@endforeach('conteudo')