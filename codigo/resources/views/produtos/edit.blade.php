@extends('layouts.main')
@section('titulo','Editar Produtos')
@section('conteudo')
<h4>Editar Produto</h4>
<div id="form">
    <form action="{{route('produto.update', [$produto->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
                <div class="col">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" id="descricao">
                </div>
                <p></p>
                <div class="col">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" id="quantidade">
                </div>
                <div class="col">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" placeholder="Valor" name="valor" id="valor">
                </div>
            </div>
            <p><p><input  class="btn btn-secondary active" type="submit" value="Salvar"></p></p>
    </form>
</div>
@endsection('conteudo')
