<h1>Página de consulta de entradas</h1>
@foreach ($entradas as $entrada)
<ul>
    <li>Nome do forncedor: {{$entrada->data}}</li>
    <li>Endereco do forncedor: {{$entrada->valortotal}}</li>
</ul>
@endforeach