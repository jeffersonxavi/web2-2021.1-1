@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h2>Cadastro Motor</h2>
<div id="form">
    <form action="{{route('motor.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <div id="form1">
                    <label for="">Motor</label>
                </div>
                <div id="forminput">
                    <input type="text" name="potencia" id="potencia" class="form-control @error('potencia') is-invalid @enderror" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ old('potencia') }}">
                    @error('potencia')
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