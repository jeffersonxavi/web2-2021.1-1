@extends('layouts.main')
@section('titulo','Cadastro de fornecedores')
@section('conteudo')
<div id="form">
<h4>Cadastro de Fornecedor</h4>
    <form action="{{route('fornecedor.store')}}" method="POST">
        @csrf
        <div class="row">
            <p>
            <div class="col">
                <label for="">Nome do Fornecedor</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome" name="nome" id="nome">
                @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <p>
            <div class="col">
                <label for="">CNPJ do Fornecedor</label>
                <input type="text" class="form-control @error('cnpj') is-invalid @enderror" placeholder="CNPJ" name="cnpj" id="cnpj">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Endereço do Fornecedor</label>
                <input type="text" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço" name="endereco" id="endereco">
                @error('endereco')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Telefone do Fornecedor</label>
                <input type="text" class="form-control @error('telefone') is-invalid @enderror" placeholder="Telefone" name="telefone" id="telefone">
                @error('telefone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <p>
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
</div>
@endsection('conteudo')