@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h2>Cadastro Modelo de Carro</h2>
<div id="form">
    <form action="{{route('carro.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div id="form1">
                    <label for="">Modelo do Carro</label>
                </div>
                <div id="forminput">
                    <input type="text" name="modelo" id="modelo" class="form-control @error('modelo') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('modelo') }}">
                    @error('modelo')
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