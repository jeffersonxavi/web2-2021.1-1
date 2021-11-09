@extends('layouts.main')
@section('titulo','Lista de contato')
@section('conteudo')
<h4>Visualizar Contato</h4>
@foreach ($contatos as $contato)
<ul>
    <li>telefone: {{$entrada->telefone}}</li>
    <li>instagram: {{$entrada->instagram}}</li>
    <li>telegram: {{$entrada->telegram}}</li>
</ul>
@endforeach
@endsection