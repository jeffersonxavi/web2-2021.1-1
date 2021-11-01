@extends('layouts.main')
@section('titulo','cadastro de produtos')
@section('conteudo')
<body>
    <form action="{{route('produto.store')}}" method="POST">
        @csrf
            <div class="row">
                <div class="col">
                    <label for="">Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" id="descricao">
                </div>
                <div class="col">
                    <label for="">Quantidade</label>
                    <input type="text" class="form-control" placeholder="Quantidade" name="quantidade" id="quantidade">
                </div>
                <div class="col">
                    <label for="">Valor</label>
                    <input type="text" class="form-control" placeholder="Valor" name="valor" id="valor">
                </div>
            </div>
        <p><input type="submit" value="cadastrar">    
    </form>
@endsection('conteudo')
