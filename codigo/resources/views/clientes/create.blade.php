@extends('layouts.main')
@section('titulo','Cadastro de clientes')
@section('conteudo')
<h4>Cadastro de Cliente</h4>
<div id="form">
    <form action="{{route('cliente.store')}}" method="POST">
        @csrf
        <div class="row">
                <div class="col">
                    <label for="">Nome do Cliente</label>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
                </div>
                <p></p>
                <div class="col">
                    <label for="">Endereço do Cliente</label>
                    <input type="text" class="form-control" placeholder="Endereço" name="endereco" id="endereco">
                </div>
                <div class="col">
                    <label for="">Debito do Cliente</label>
                    <input type="text" class="form-control" placeholder="Debito" name="debito" id="debito">
                </div>
            </div>
            <p><p><input  class="btn btn-secondary active" type="submit" value="Cadastrar"></p></p>
    </form>
</div>
@endsection('conteudo')
