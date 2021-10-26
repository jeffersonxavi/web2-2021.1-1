<h1>Página de consulta de entradas</h1>
@foreach ($entrada as $entradas)
<ul>
    <li>Nome do forncedor: {{$entrada->data}}</li>
    <li>Endereco do forncedor: {{$entrada->valortotal}}</li>
</ul>
@endforeach