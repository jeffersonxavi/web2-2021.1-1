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
                <label for="telefone">Telefone do cliente</label>
                <input type="text" class="form-control @error('telefone') is-invalid @enderror" placeholder="Endereço" name="telefone" id="telefone" value="{{$cliente->telefone}}">
                @error('telefone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="cpf">CPF do cliente</label>
                <input type="text" class="form-control @error('cpf') is-invalid @enderror" placeholder="CPF" name="cpf" id="cpf" value="{{$cliente->cpf}}">
                @error('cpf')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="cnpj">CNPJ do cliente</label>
                <input type="text" class="form-control @error('cnpj') is-invalid @enderror" placeholder="CNPJ" name="cnpj" id="cnpj" value="{{$cliente->cnpj}}">
                @error('cnpj')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                <label for="debito">Débito do cliente</label>
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