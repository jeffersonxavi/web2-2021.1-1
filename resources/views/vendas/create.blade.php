@extends('layouts.main')
@section('titulo','cadastro de produtos')
@section('conteudo')
<h4>Cadastar Vendas</h4>
<div id="form">
    <form action="{{route('venda.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">ID Cliente</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="ID Cliente" name="id_cliente" id="id_cliente">
                @error('id_cliente')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Data</label>
                <input type="date" class="form-control @error('nome') is-invalid @enderror" placeholder="Data" name="data" id="data">
                @error('data')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Valor Total</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" placeholder="Total" name="valortotal" id="valortotal">
                @error('valortotal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <p>
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
    <div>
        @endsection('conteudo')