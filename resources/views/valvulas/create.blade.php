@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h2>Cadastro Valvula</h2>
<div id="form">
    <form action="{{route('valvula.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div id="form1">
                    <label for="">Valvula</label>
                </div>
                <div id="forminput">
                    <input type="text" name="quantidade" id="quantidade" class="form-control @error('quantidade') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('quantidade') }}">
                    @error('quantidade')
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