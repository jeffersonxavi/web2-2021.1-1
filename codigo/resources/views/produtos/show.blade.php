<h4>Visualizar Produto</h4>
@foreach ($produtos as $produto)
<ul>
    <li>descricao: {{$produto->descricao}}</li>
    <li>quantidade: {{$produto->quantidade}}</li>
    <li>valor: {{$produto->valor}}</li>
</ul>
@endforeach