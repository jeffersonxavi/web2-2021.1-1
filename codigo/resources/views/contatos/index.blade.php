<h1>Listar contatos</h1>
@foreach ($contatos as $contato)
<ul>
    <li>Telefone: {{$contato->telefone}};</li>
    <li>Instagram: {{$contato->instagram}};</li>
    <li>Telegram: {{$contato->telegram}};</li>
    <a href="{{route('contato.edit', [$contato->id])}}">Editar</a>
    <form action="{{route('contato.destroy',[$contato->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach