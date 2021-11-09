@extends('layouts.main')
@section('titulo','Editar Contato')
@section('conteudo')
<h4>Editar Contato</h4>
<div id="form">
    <form action="{{route('contato.update', [$contato->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="telefone">telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{$contato->telefone}}">
        <p><label for="instagram">instagram</label>
        <input type="text" name="instagram" id="instagram" value="{{$contato->instagram}}">
        <p><label for="telegram">telegram</label>
        <input type="text" name="telegram" id="telegram" value="{{$contato->telegram}}">
        <p><input type="submit" value="salvar">    
    </form>
</div>
@endsection('conteudo')