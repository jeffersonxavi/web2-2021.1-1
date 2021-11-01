<h1>Página de consulta de Itens Venda</h1>
@foreach ($itensvendas as $itensvenda)
<ul>
    <li>Preco unidade: {{$itensvenda->precocompra}}</li>
    <li>Quantidade: {{$itensvenda->quantidade}}</li>
</ul>
@endforeach