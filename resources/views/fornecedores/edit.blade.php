@extends('layouts.main')
@section('titulo','Editar Fornecedor')
@section('conteudo')
<h4>Editar Fornecedor</h4>
<div id="form">
    <form action="{{route('fornecedor.update', [$fornecedor->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col">
            <div class="col">
                <label for="nome">Nome do Fornecedor</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome" name="nome" id="nome" value="{{$fornecedor->nome}}">
                @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="cnpj">CNPJ do Fornecedor</label>
                <input type="text" class="form-control @error('cnpj') is-invalid @enderror" placeholder="CNPJ" name="CNPJ" id="cnpj" value="{{$fornecedor->cnpj}}">
                @error('cnpj')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="telefone">Telefone do Fornecedor</label>
                <input type="text" class="form-control @error('telefone') is-invalid @enderror" placeholder="Telefone" name="telefone" id="telefone" value="{{$fornecedor->telefone}}">
                @error('telefone')
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