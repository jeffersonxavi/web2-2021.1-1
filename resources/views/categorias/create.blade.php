@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h2>Cadastro de Categoria</h2>
<div id="form">
    <form action="{{route('categoria.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div id="form1">
                    <label for="">Categoria</label>
                </div>
                <div id="forminput">
                    <input type="text" name="categoria" id="categoria" class="form-control @error('categoria') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('categoria') }}">
                    @error('categoria')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <p>
        </div>
        <p>
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
        </p>
    </form>
</div>
@endsection('conteudo')