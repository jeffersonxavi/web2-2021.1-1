@extends('layouts.main')
@section('titulo','Cadastro de clientes')
@section('conteudo')
<h4>Cadastro de Cliente</h4>
<div id="form">
    <form action="{{route('cliente.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Nome do Cliente</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="Nome" name="nome" id="nome">
                @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <p></p>
            <div class="col">
                <label for="">Endereço do Cliente</label>
                <input type="text" class="form-control @error('endereco') is-invalid @enderror" placeholder="Endereço" name="endereco" id="endereco">
                @error('endereco')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Debito do Cliente</label>
                <input type="text" class="form-control @error('debito') is-invalid @enderror"  placeholder="Debito" name="debito" id="debito">
                @error('debito')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <p>
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
        </p>
    </form>
</div>
@endsection('conteudo')