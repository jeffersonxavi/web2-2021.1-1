@extends('layouts.main')
@section('titulo','Cadastro')
@section('conteudo')
<h4>Cadastro Itens Venda</h4>
<div id="form">
    <form action="{{route('itensvenda.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">id_venda</label>
                <input type="text" class="form-control @error('id_venda') is-invalid @enderror" placeholder="id_venda" name="id_venda" id="id_venda">
                @error('id_venda')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">id_produto</label>
                <input type="text" class="form-control @error('id_produto') is-invalid @enderror" placeholder="id_produto" name="id_produto" id="id_produto">
                @error('id_produto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Preço da compra</label>
                <input type="text" class="form-control @error('preco') is-invalid @enderror" placeholder="Preço" name="preco" id="preco">
                @error('preco')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col">
                <label for="">Quantidade</label>
                <input type="text" class="form-control @error('quantidade') is-invalid @enderror" placeholder="Quantidade" name="quantidade" id="quantidade">
                @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <p><input class="btn btn-secondary active" type="submit" value="Cadastrar"></p>
    </form>
</div>
@endsection('conteudo')