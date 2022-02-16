@extends('layouts.main')
@section('titulo','Editar localizacao')
@section('conteudo')
<h4>Editar localizacao</h4>
<div id="form">
    <form action="{{route('localizacao.update', [$localizacao->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="departamento">departamento do localizacao</label>
                <input type="text" class="form-control @error('departamento') is-invalid @enderror" placeholder="departamento" name="departamento" id="departamento" value="{{$localizacao->departamento}}">
                @error('departamento')
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