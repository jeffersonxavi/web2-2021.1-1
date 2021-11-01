<h1>Pagina de edição de contato</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="{{route('contato.update', [$contato->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="telefone">telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{$contato->telefone}}">
        <p><label for="instagram">instagram</label>
        <input type="text" name="instagram" id="instagram" value="{{$contato->instagram}}">
        <p><label for="telegram">telegram</label>
        <input type="text" name="telegram" id="telegram" value="{{$contato->telegram}}">
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>