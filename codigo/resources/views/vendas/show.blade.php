<h1>Página de consulta de vendas</h1>
@foreach ($venda as $vendas)
<ul>
    <li>Nome do forncedor: {{$venda->data}}</li>
    <li>Endereco do forncedor: {{$venda->valortotal}}</li>
</ul>
@endforeach