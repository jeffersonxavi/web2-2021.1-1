@extends('layouts.main')
@section('titulo','Editar Motor')
@section('conteudo')
<h4>Editar Motor</h4>
<div id="form">
    <form action="{{route('motor.update', [$motor->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="potencia">Potencia</label>
                <input type="text" class="form-control @error('potencia') is-invalid @enderror" placeholder="Potencia" name="potencia" id="potencia" value="{{$motor->potencia}}">
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