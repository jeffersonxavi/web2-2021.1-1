@extends('layouts.main')
@section('titulo','Editar Marca')
@section('conteudo')
<h4>Editar Marca</h4>
<div id="form">
    <form action="{{route('marca.update', [$marca->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="marca">marca</label>
                <input type="text" class="form-control @error('marca') is-invalid @enderror" placeholder="Marca" name="marca" id="marca" value="{{$marca->marca}}">
                @error('ano')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <p><input class="btn btn-secondary active" type="submit" value="Salvar"></p>
    </form>
</div>
@endsection('conteudo')