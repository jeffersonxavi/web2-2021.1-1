@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h2>Cadastro de Departamento</h2>
<div id="form">
    <form action="{{route('localizacao.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div id="form1">
                    <label for="">Departamento</label>
                </div>
                <div id="forminput">
                    <input type="text" name="departamento" id="departamento" class="form-control @error('departamento') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('departamento') }}">
                    @error('departamento')
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