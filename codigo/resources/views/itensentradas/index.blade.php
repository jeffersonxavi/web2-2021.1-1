<h1>Listar itensentradas</h1>
@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Nome do itensentrada: {{$itensentrada->precocompra}};</li>
    <li>Endereço do itensentrada: {{$itensentrada->quantidade}};</li>
    <a href="edit/{{$itensentrada->id}}">Editar</a>
    <form action="../itensentradas/{{$itensentrada->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach