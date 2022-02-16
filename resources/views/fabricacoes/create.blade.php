@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h2>Cadastro Ano de Fabricação</h2>
<div id="form">
    <form action="{{route('fabricacao.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div id="form1">
                    <label for="">Ano</label>
                </div>
                <div id="forminput">
                    <input type="text" name="ano" id="ano" class="form-control @error('ano') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('ano') }}">
                    @error('ano')
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