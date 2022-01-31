@extends('layouts.main')
@section('titulo','Editar Cliente')
@section('conteudo')
<h4>Editar Cliente</h4>
<div id="form">
    <form action="{{route('cliente.update', [$cliente->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="nome">Nome do cliente</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome" name="nome" id="nome" value="{{$cliente->nome}}">
                @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="endereco">Endereço do cliente</label>
                <input type="text" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço" name="endereco" id="endereco" value="{{$cliente->endereco}}">
                @error('endereco')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="debito">Endereço do cliente</label>
                <input type="text" class="form-control @error('debito') is-invalid @enderror" placeholder="Debito" name="debito" id="debito" value="{{$cliente->debito}}">
                @error('debito')
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