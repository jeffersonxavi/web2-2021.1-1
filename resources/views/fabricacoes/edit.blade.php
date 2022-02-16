@extends('layouts.main')
@section('titulo','Editar Fabricacao')
@section('conteudo')
<h4>Editar fabricacao</h4>
<div id="form">
    <form action="{{route('fabricacao.update', [$fabricacao->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="ano">ano</label>
                <input type="text" class="form-control @error('ano') is-invalid @enderror" placeholder="ano" name="ano" id="ano" value="{{$fabricacao->ano}}">
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