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
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="{{$fornecedor->nome}}">
                    
                    <label for="email">E-mail do Fornecedor</label>
                    <input type="text" class="form-control" placeholder="E-mail" name="email" id="email" value="{{$fornecedor->email}}">
                    
                    <label for="endereco">Endereço do Fornecedor</label>
                    <input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
                </div>
        </div>
        <p><p><input  class="btn btn-secondary active" type="submit" value="salvar"></p></p>
    </form>
</div>
@endsection('conteudo')