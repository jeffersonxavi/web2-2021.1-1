@extends('layouts.main')
@section('titulo','Editar Valvula')
@section('conteudo')
<h4>Editar Valvula</h4>
<div id="form">
    <form action="{{route('valvula.update', [$valvula->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control @error('quantidade') is-invalid @enderror" placeholder="Quantidade" name="quantidade" id="quantidade" value="{{$valvula->quantidade}}">
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