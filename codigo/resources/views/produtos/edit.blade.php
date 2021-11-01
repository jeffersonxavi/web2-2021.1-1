<h1>Pagina de edição de produto</h1>
<!DOCTYPE html>
@extends('layouts.main')
@section('titulo','Edição de produtos')
@section('conteudo')
    <form action="{{route('produto.update', [$produto->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
                <div class="col">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" id="descricao">
                </div>
                <div class="col">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" id="quantidade">
                </div>
                <div class="col">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" placeholder="Valor" name="valor" id="valor">
                </div>
            </div>
        <p><input type="submit" value="salvar">    
    </form>
@endsection('conteudo')
