@extends('layouts.main')
@section('titulo','Editar Categoria')
@section('conteudo')
<h4>Editar Categoria</h4>
<div id="form">
    <form action="{{route('categoria.update', [$categoria->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control @error('categoria') is-invalid @enderror" placeholder="categoria" name="categoria" id="categoria" value="{{$categoria->categoria}}">
                @error('categoria')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <p><input type="submit" value="salvar">
    </form>
</div>
@endsection('conteudo')