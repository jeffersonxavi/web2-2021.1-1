<h1>Pagina de Cadastro de Contato</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADICIONAR CONTATO</title>
</head>
<body>
    <form action="{{route('contato.store')}}" method="POST">
        @csrf
        <label for="">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <p><label for="">Instagram</label>
        <input type="text" name="instagram" id="instagram">
        <p><label for="">Telegram</label>
        <input type="text" name="telegram" id="telegram">  
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>