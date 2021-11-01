<h1>Página de consulta de venda</h1>
@foreach ($vendas as $venda)
<ul>
    <li>data: {{$venda->data}}</li>
    <li>venda: {{$venda->valortotal}}</li>
</ul>
@endforeach