@extends('layouts.main')
@section('titulo','Editar Mdelo')
@section('conteudo')
<h4>Editar Modelo</h4>
<div id="form">
    <form action="{{route('carro.update', [$carro->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control @error('modelo') is-invalid @enderror" placeholder="Modelo" name="modelo" id="modelo" value="{{$carro->modelo}}">
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