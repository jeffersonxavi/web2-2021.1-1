@extends('layouts.main')
@section('titulo','Edição de fornecedores')
@section('conteudo')
    <form action="{{route('fornecedor.update', [$fornecedor->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
                <div class="col">
                    <label for="nome">Nome do Fornecedor</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="{{$fornecedor->nome}}">
                </div>
                <div class="col">
                    <label for="email">E-mail do Fornecedor</label>
                    <input type="text" class="form-control" placeholder="E-mail" name="email" id="email" value="{{$fornecedor->email}}">
                </div>
                <div class="col">
                    <label for="endereco">Endereço do Fornecedor</label>
                    <input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
                </div>
            </div>
        <p><input type="submit" value="salvar">    
    </form>
@endsection('conteudo')