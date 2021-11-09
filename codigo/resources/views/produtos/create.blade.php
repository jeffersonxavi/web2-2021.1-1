@extends('layouts.main')
@section('titulo','cadastro de produtos')
@section('conteudo')
<h4>Cadastro de Produto</h4>
<div id="form">
    <form action="{{route('produto.store')}}" method="POST">
        @csrf
            <div class="row">
                <div class="col">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" id="descricao">
                </div>
                <p>
                <div class="col">
                    <label for="">Quantidade</label>
                    <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" id="quantidade">
                </div>
                <div class="col">
                    <label for="">Valor</label>
                    <input type="text" class="form-control" placeholder="Valor" name="valor" id="valor">
                </div>
            </div>
            <p><p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
</div>
@endsection('conteudo')
