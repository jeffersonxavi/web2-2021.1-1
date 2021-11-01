@extends('layouts.main')
@section('titulo','cadastro de itensentrada')
@section('conteudo')
        <form action="{{route('itensentrada.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="">Preço da compra</label>
                    <input type="text" class="form-control" placeholder="Preço" name="precocompra" id="precocompra">
                </div>
                <div class="col">
                    <label for="">Quantidade</label>
                    <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" id="quantidade">
                </div>
            </div>
            {{id_itensentrada}}
            {{id_produto}}
            <p><input type="hidden" name="id_itensentrada" value="{{$id_itensentrada}}">
            <p><input type="hidden" name="id_produto" value="{{$id_produto}}">    
            <p><input type="submit" value="cadastrar">   
        </form>
@endsection('conteudo')