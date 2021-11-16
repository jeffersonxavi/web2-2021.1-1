@extends('layouts.main')
@section('titulo','Cadastro de contato')
@section('conteudo')
<h4>Cadastro de Contato</h4>
<div id="form">
    <form action="{{route('contato.store')}}" method="POST">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        <label for="">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <p><label for="">Instagram</label>
            <input type="text" name="instagram" id="instagram">
        <p><label for="">Telegram</label>
            <input type="text" name="telegram" id="telegram">
        <p><input type="submit" value="cadastrar">
    </form>
</div>
@endsection