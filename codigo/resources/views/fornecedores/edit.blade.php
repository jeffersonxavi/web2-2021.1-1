@extends('layouts.main')
@section('titulo','Editar Fornecedor')
@section('conteudo')
<h4>Editar Fornecedor</h4>
<div id="form">
    <form action="{{route('fornecedor.update', [$fornecedor->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
                <div class="col">
                    <label for="nome">Nome do Fornecedor</label>
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome" name="nome" id="nome" value="{{$fornecedor->nome}}">
                    @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                    <label for="email">E-mail do Fornecedor</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" id="email" value="{{$fornecedor->email}}">
                    @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                    <label for="endereco">Endereço do Fornecedor</label>
                    <input type="text" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
                    @error('endereco')
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