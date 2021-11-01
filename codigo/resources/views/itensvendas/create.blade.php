<h1>Pagina de Cadastro de Contato</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADICIONAR PRODUTO</title>
</head>
<body>
    <form action="{{route('itensvenda.store')}}" method="POST">
        @csrf
        <label for="preco">preco</label>
        <input type="text" name="preco" id="preco">
        <p><label for="quantidade">quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>