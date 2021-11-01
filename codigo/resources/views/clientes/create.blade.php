@extends('layouts.main')
@section('titulo','cadastro de clientes')
@section('conteudo')
    <form action="{{route('cliente.store')}}" method="POST">
        @csrf
        <div class="row">
                <div class="col">
                    <label for="">Nome do Fornecedor</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
                </div>
                <div class="col">
                    <label for="">Endereço do Fornecedor</label>
                    <input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco">
                </div>
                <div class="col">
                    <label for="">Debito do Fornecedor</label>
                    <input type="text" class="form-control" placeholder="Debito" name="debito" id="debito">
                </div>
            </div>
            <p><p><input  class="btn btn-secondary active" type="submit" value="Cadastrar"></p></p>
    </form>
@endsection('conteudo')