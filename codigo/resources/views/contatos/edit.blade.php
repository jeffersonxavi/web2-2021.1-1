@extends('layouts.main')
@section('titulo','Editar Contato')
@section('conteudo')
<h4>Editar Contato</h4>
<div id="form">
    <form action="{{route('contato.update', [$contato->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="telefone">telefone</label>
        <input type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" id="telefone" value="{{$contato->telefone}}">
        @error('telefone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <p><label for="instagram">instagram</label>
            <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram" value="{{$contato->instagram}}">
            @error('instagram')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <p><label for="telegram">telegram</label>
            <input type="text" class="form-control @error('telegram') is-invalid @enderror" name="telegram" id="telegram" value="{{$contato->telegram}}">
            @error('telegram')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <p><input class="btn btn-secondary active" type="submit" value="Salvar"></p>
    </form>
</div>
@endsection('conteudo')