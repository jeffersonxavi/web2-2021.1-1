@extends('layouts.main')
@section('titulo','Editar Entrada')
@section('conteudo')
<h4>Editar Entrada</h4>
<div id="form">
<form action="{{route('entrada.update', [$entrada->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Data entrada</label>
        <input type="text" name="data" id="data" value="{{$entrada->data}}">
        <p><label for="">Valor total da entrada</label>
        <input type="text" name="valortotal" id="valortotal" value="{{$entrada->valortotal}}">
        <p><input type="submit" value="salvar">    
    </form>
</div>
@endforeach('conteudo')