<h1>Página de consulta de Itens Entrada</h1>
@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Preco: {{$itensentrada->preco}}</li>
    <li>Quantidade: {{$itensentrada->quantidade}}</li>
</ul>
@endforeach