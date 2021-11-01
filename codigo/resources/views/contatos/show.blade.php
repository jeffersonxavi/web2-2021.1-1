<h1>Página de consulta de Contato</h1>
@foreach ($contatos as $contato)
<ul>
    <li>telefone: {{$entrada->telefone}}</li>
    <li>instagram: {{$entrada->instagram}}</li>
    <li>telegram: {{$entrada->telegram}}</li>
</ul>
@endforeach