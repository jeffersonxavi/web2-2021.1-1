@extends('layouts.main')
@section('titulo','cadastro de produtos')
@section('conteudo')
<h4>Cadastar Vendas</h4>
<div id="form">
    <form action="{{route('venda.store')}}" method="POST">
    @csrf
            <div class="row">
                <div class="col">
                    <label for="">Data</label>
                    <input type="date" class="form-control" placeholder="Data" name="data" id="data">
                </div>
                <div class="col">
                    <label for="">Valor Total</label>
                    <input type="text" class="form-control" placeholder="Total" name="valortotal" id="valortotal">
                </div>
            </div>
            <p><p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
<div>
@endsection('conteudo')