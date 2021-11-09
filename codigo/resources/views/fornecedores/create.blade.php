@extends('layouts.main')
@section('titulo','Cadastro de fornecedores')
@section('conteudo')
<div id="form">
    <form action="{{route('fornecedor.store')}}" method="POST">
        @csrf
        <div class="row">
            <p>
            <div class="col">
                <label for="">Nome do Fornecedor</label>
                <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
            </div>
            <p>
            <div class="col">
                <label for="">E-mail do Fornecedor</label>
                <input type="text" class="form-control" placeholder="E-mail" name="email" id="email">
            </div>
            <div class="col">
                <label for="">Endereço do Fornecedor</label>
                <input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco">
            </div>
        </div>
        
        <p><p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
</div>
@endsection('conteudo')