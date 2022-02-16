@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h2>Cadastro Marca</h2>
<div id="form">
    <form action="{{route('marca.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div id="form1">
                    <label for="">Marca</label>
                </div>
                <div id="forminput">
                    <input type="text" name="marca" id="marca" class="form-control @error('marca') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('marca') }}">
                    @error('marca')
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