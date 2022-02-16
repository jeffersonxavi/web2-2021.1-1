@extends('layouts.main')
@section('titulo','Cadastro de Entrada')
@section('conteudo')
<h4>Cadastro de Entrada</h4>
<div id="form">
    <form action="{{route('entrada.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">ID Fornecedor</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="ID Fornecedor" name="id_fornecedor" id="id_fornecedor">
                @error('id_fornecedor')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Data entrada</label>
                <input type="date" class="form-control @error('data') is-invalid @enderror" placeholder="Data" name="data" id="data">
                @error('data')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Valor Total</label>
                <input type="text" class="form-control @error('valortotal') is-invalid @enderror" placeholder="Valor Total" name="valortotal" id="valortotal">
                @error('valortotal')
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